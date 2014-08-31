<?php

class FileController extends BaseController {
	/**
	 * upload 
	 * Uploads the requested file
	 * POST /upload
	 * @return response
	 */
	public function upload()
	{
		// Generate an ID and get the file info
		$id = md5(str_random('128'));
		$fileName = Input::file('file')->getClientOriginalName();
		$fileSize = $fileSize = Input::file('file')->getSize();
		$secret = str_random('64');

		// Check the file is <= 2GB

		// Move the file to the files directory
		Input::file('file')->move("../files/$id/$secret", $fileName);

		// Store the data in the database
		$file = Files::firstOrCreate([
			'id' => $id,
			'secret' => $secret,
			'filename' => $fileName,
			'owner_ip' => Request::getClientIp(),
			'filesize' => $fileSize,
			]);

		return Redirect::to("files/send/$id");
	}

	/**
	 * send
	 * Generates the link to send/share the file
	 * GET /files/send/{fileID}
	 * @return response
	 */
	public function send($fileId)
	{
		try
		{
			$file = Files::findOrFail($fileId);
			return View::make('files/send')->with('file', $file)->render();
		}
		catch(Exception $e)
		{
			return View::make('files/deleted')->render();
		}
	}

	/**
	 * download
	 * Generated the download link
	 * GET /files/dl/{fileID}
	 * @return  response
	 */
	public function download($fileId)
	{
		try
		{
			$file = Files::findOrFail($fileId);
			if(is_null($file->permitted_ip))
			{
				$file->permitted_ip = Request::getClientIp();
				$file->save();
			}
			

			return View::make('files/download')->with('file', $file)->render();
		}
		catch(Exception $e)
		{
			return View::make('files/deleted')->render();
		}
	}

	public function process($fileId)
	{
		try
		{
			$file = Files::findOrFail($fileId);
			
			if($file->permitted_ip != Request::getClientIp())
			{
				throw new Exception("Unauthorised IP address (Request::getClientIp())");
			}

			// (Soft) delete the file in the database
			$file->delete();
			
			// Set the headers, read the file, start the download
			header("Content-Description: File Transfer");
			header("Content-Type: application/octet-stream");
			header("Content-Disposition: attachment; filename=$file->filename");
			header("Cache-Control: no-cache, must-revalidate");
			header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
			header("Content-Length: $file->filesize");
			
			// Delete the file, then the folders
			unlink("../files/$file->id/$file->secret/$file->filename");
			rmdir("../files/$file->id/$file->secret");
			rmdir("../files/$file->id");
			
		}
		catch(Exception $e)
		{
			return View::make('files/deleted')->render();
		}
	}

	/**
	 * getTotalBurned
	 * Gets the total amount of files downloaded/"burned" to date
	 * POST /files/totalburned
	 * @return int
	 *
	 */
	public function getTotalBurned()
	{
		return Files::onlyTrashed()->count();
	}
}