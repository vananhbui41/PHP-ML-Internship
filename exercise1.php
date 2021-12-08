<html>
    <body>
    <?php
    function checkValidString($s){
        $x = stripos($s,"book");
        $y = stripos($s,"restaurant");
        
        if (is_numeric($x) xor is_numeric($y)){
            return true;
        }
        else {
            return false;
        }
    }

    function fileToString($filename){
        if(!file_exists($filename)) {
            echo "<br>";
            die("File not found.");
        } else {
            $fp = fopen($filename, "r") or die("Unable to open file!");
            $contents = fread($fp, filesize($filename));
            return $contents;
            fclose($fp);
        }        
    }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <label>Filename:</label>
            <input type="text"  name="filename">
            <button>Submit</button>

            <?php
            if (array_key_exists("filename",$_POST)){
                $filename = $_POST["filename"]; 
                $s = fileToString($filename);                
                if(checkValidString($s)){
                    $n = substr_count($s,".");
                    echo "<br><br>$filename:";
                    echo "Chuỗi  hợp lệ. chuỗi bao gồm $n câu.";
                }
                else {
                    echo "<br><br>$filename:";
                    echo "Chuỗi không hợp lệ";
                }
            }    
            ?>
        </form>
    </body>
</html>