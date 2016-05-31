<?php
$fileName = isset($_GET['filename']) ? $_GET['filename'] : '';



class DocxConversion{
    private $filename;
    public  $recruiterFile;

    public function __construct($filePath) {
        $this->filename = 'uploads/'.$filePath;


    }

    private function read_doc() {
        $fileHandle = fopen($this->filename, "r");
        $line = @fread($fileHandle, filesize($this->filename));
        $lines = explode(chr(0x0D),$line);

        $outtext = "";
        foreach($lines as $thisline)
        {

            $pos = strpos($thisline, chr(0x00));
            if (($pos !== FALSE)||(strlen($thisline)==0))
            {
            } else {
                $outtext .= $thisline." ";
            }

        }
        $outtext = preg_replace("/[^a-zA-Z0-9\s\,\.\-\n\r\t@\/\_\(\)]/","",$outtext);
        return $outtext;
    }

    private function read_docx(){

        $rand_no  = rand(100000, 999999);
        $fileName = "Recruiter_File" . $rand_no . ".docx";
        $folder   = "uploads/recruiter/";


        if (!file_exists($folder))
            mkdir($folder);

        //Copy the Template file to the Result Directory
        $fullpath = $folder . '/' . $fileName;
        $this->recruiterFile = $fullpath;
        copy($this->filename, $fullpath);

        $zip = new ZipArchive;

        //Docx file is nothing but a zip file. Open this Zip File
        if($zip->open($fullpath) == true)
        {
            //In the Open XML Wordprocessing format content is stored
            //in the document.xml file located in the word directory.

            $key_file_name = 'word/document.xml';
            $message = $zip->getFromName($key_file_name);



            $message = preg_replace("/[a-z0-9!#$%&\'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&\'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/", 'XXXX', $message);

            $message = preg_replace('/(?:(?:\+?1\s*(?:[.-]\s*)?)?(?:\(\s*([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9])\s*\)|([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9]))\s*(?:[.-]\s*)?)?([2-9]1[02-9]|[2-9][02-9]1|[2-9][02-9]{2})\s*(?:[.-]\s*)?([0-9]{4})(?:\s*(?:#|x\.?|ext\.?|extension)\s*(\d+))?/','XXXXXXXXX',$message); // extract phonenumber

            //Replace the content with the new content created above.
            $zip->addFromString($key_file_name, $message);
            $zip->close();

            //return $message;
        }
    }



    public function convertToText() {

        if(isset($this->filename) && !file_exists($this->filename)) {
            return "File Not exists";
        }

        $fileArray = pathinfo($this->filename);
        $file_ext  = $fileArray['extension'];
        if($file_ext == "doc" || $file_ext == "docx")
        {
            if($file_ext == "doc") {
                return $this->read_doc();
            } elseif($file_ext == "docx") {
                return $this->read_docx();
            }
        } else {
            return "Invalid File Type";
        }
    }

}

$docObj = new DocxConversion($fileName);
$docObj->convertToText();



$contenttype = "application/force-download";
header("Content-Type: " . $contenttype);
header("Content-Disposition: attachment; filename=\"" . basename($docObj->recruiterFile) . "\";");
readfile($docObj->recruiterFile);
exit();