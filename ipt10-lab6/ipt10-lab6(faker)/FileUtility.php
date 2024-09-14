<?php 

class FileUtility {
    private $file;

    public function __construct($filename) {
        if (strpos($filename, '/') === 0) {
            $this->file = $filename;
        } else {
            $this->file = __DIR__ . '/' . $filename;
        }
    }
    
    

    public function writeToFile($data) {
        $handle = fopen($this->file, 'w');
        foreach ($data as $line) {
            fputcsv($handle, $line);
        }
        fclose($handle);
    }

    public function readFromFile() {
        $data = [];
        if (($handle = fopen($this->file, 'r')) !== false) {
            while (($line = fgetcsv($handle)) !== false) {
                $data[] = $line;
            }
            fclose($handle);
        }
        return $data;
    }
}
?>
