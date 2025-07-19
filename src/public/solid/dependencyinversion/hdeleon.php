<?php
interface FileInterface
{
    public function task();
}


class Monitor
{
    public $origin;
    public function __construct(FileInterface $origin)
    {
        $this->origin = $origin;
    }

    public function monitor()
    {
        return $this->origin->task();
    }
}

class InfoByFile implements FileInterface
{
    public $path;

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    public function task()
    {
        $data = json_decode(file_get_contents($this->path), true);
        $message = '';
        foreach ($data as $item) {
            $message .= $item['name'] . ' ' . $item['age'] . ' ' . $item['city'] . '<hr>' . PHP_EOL;
        }
        return $message;
    }
}

class TextFile implements FileInterface
{
    public $path;

    public function __construct(string $path)
    {
      $this->path = $path;
    }

    public function task()
    {
      return file_get_contents($this->path);
    }
}

$jsonMonitor = new Monitor(new InfoByFile('file.json'));
$txtMonitor = new Monitor(new TextFile('file.txt'));
var_dump($jsonMonitor->monitor());
var_dump($txtMonitor->monitor());