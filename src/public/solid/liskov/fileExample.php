<?php

interface File
{
    public function __construct(string $file);
    public function parse(string $file);
    // public function validateFile(string $file) : bool;
}

/* Class File is not following the Liskov Substitution Principle
 * because it does not implement the validateFile method
 * which is required by the File interface
 */
/* 
class File implements FileInterface
{
    public $file;

    public function __construct(string $file)
    {
        $this->file = $file;
    }

    public function parse(string $file)
    {
        // parse file
    }
}
*/

class JsonFile implements File
{
    public $file;

    public function __construct(string $file)
    {
        $this->file = $file;
    }

    public function parse(string $file)
    {

        $data = json_decode(file_get_contents($file), true);

        return $data;
    }

    // public function validateFile(string $file) : bool
    // {
    //     if (pathinfo($file, PATHINFO_EXTENSION) !== 'json') {
    //         throw new Exception('File is not a JSON file');
    //     }

    //     return true;
    // }
}

class TextFile implements File
{
    public $file;

    public function __construct(string $file)
    {
        $this->file = $file;
    }

    public function parse(string $file)
    {
        $data = file_get_contents($file);

        return $data;
    }

    // public function validateFile(string $file) : bool
    // {
    //     if (pathinfo($file, PATHINFO_EXTENSION) !== 'txt') {
    //         throw new Exception('File is not a Text file');
    //     }

    //     return true;
    // }
}

function readFromFile(File $file) : string
{
    // $file->validateFile($file->file);
    return $file->parse($file->file);
}

$jsonFile = new JsonFile('file.json');
$textFile = new TextFile('file.txt');

echo readFromFile($jsonFile);
echo readFromFile($textFile);