
<?php
/* 
    1) List all files in a directory 
    2) Check for specific files in a directory 
    3) Check if the name is directory or file 
    4) Create directory 
    5) Copy files between directories 
               */

            chmod("../Part-13-files",0777); 

        //Sample-1: List all files in a directory 
        $path = "TestFolder1";
        $result = scandir($path);
        var_dump($result);
        echo "<br>";
        foreach($result as $dir){
            if($dir == ".") continue;
            if($dir == "..") continue;
            echo $dir;
            echo "&nbsp";
        }
        //Remove . and .. 
        echo "<br>";
        $directory = array_diff($result,['.','..']);
        var_dump($directory);

        //Sample-2: Check for specific files in a directory
        //Sample-3:Check if the name is file or directory
        //is_file or is_dir
        $result = scandir($path);
        $result = array_diff($result,['.','..']);
        foreach($result as $dir){
            if(is_file($path."./".$dir)){
                echo "This is a file <br>";
                echo $dir ."<br>";
            }
            if(is_dir($path."/".$dir)){
                echo "This is a directory <br>";
                echo $dir."<br>";
            }
        }

        //Create a directory 
        //glob function finds the pathname that matches the pattern
        $result = glob("*.php");
        var_dump($result);

        if(!file_exists("TestFolder3")){
            mkdir("TestFolder3");
        }
        //Copy files 
        //copy(src,dest)
        copy("TestFolder1/fileDirectories.php","TestFolder3/FileDirectories3.php");

        // Copy rename and delete files
        $fileName = "MyFolder.txt";
        mkdir("MyFolder");
        if(file_exists($fileName)){
            echo "File exists <br>";
            if(is_dir($fileName)){
                echo "It is a directory not file <br>";
            }
            //copy file 
            copy($fileName,"CopyFile.txt");

            //Rename 
            rename("copyFile.txt","renamedFile.txt");

            copy("renamedFile.txt","deleteFile.txt");

            //Delete the file
            unlink("deleteFile.txt");
            
        } else {
            echo "File directory does not exist";
        }

        //Read and write files 
        //open a file
        //then read a file 
        //then close a file 
        //We have to tell mode of opening
        //1) r  read mode
        //2) w  write mode 
        //3) a  append mode

        //Method 1 
        //FileName 
        $fileName = "renamedFile.txt";

        //Read a file 
        $content = file_get_contents($fileName);
        echo $content."<br>";

        //Method 2 
        //Open a file 
        $fileHandler = fopen("renamedFile.txt","r");
        $fileSize = filesize($fileName);

        //Read the content 
        $content = fread($fileHandler,$fileSize);
        echo $content."<br>";

        //Close a file 
        fclose($fileHandler);

        //Write operations on file 
        //Method-1
        $fileHandler = fopen($fileName,"w");
        fwrite($fileHandler,"This is a modified content");
        fclose($fileHandler);

        //METHOD-2
        // file_put_contents($fileHandler,'This is another modified content');

        //Read configuration file into an array
        $settings = parse_ini_file("test.ini");
        print_r($settings);

        foreach($settings as $key=>$values){
            echo $key.'=> '.$values."<br>";
        }

        //Read and write CSV Data
        $fileName = "students.csv";
        $content = file_get_contents($fileName);
        print_r($content);
        echo "<br>";

        $csvFile = file($fileName);
        foreach($csvFile as $line){
            echo $line."<br>";
        }

         $csvFile = file($fileName);
        foreach($csvFile as $line){
            $data[] = str_getcsv($line);
            print_r($data);
        }

        $csv = array_map('str_getcsv',file($fileName));
        print_r($csv);
                        ?>