<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function isPalRec($str, $s,$e) 
        { 
            // If there is only one character 
            if ($s == $e) 
            return true; 
          
            // If first and last  
            // characters do not match 
            if ($str[$s] != $str[$e]) 
            return false; 
          
            // If there are more than two  
            // characters, check if middle  
            // substring is also palindrome or not. 
            if ($s < $e + 1) 
            return isPalRec($str, $s + 1, $e - 1); 
          
            return true; 
        } 
          
        function isPalindrome($str) 
        { 
        $n = strlen($str); 
          
        // An empty string is  
        // considered as palindrome 
        if ($n == 0) 
            return true; 
          
        return isPalRec($str, 0, $n - 1); 
        } 
          
        // Driver Code 
        { 
            $str = "geeg"; 
          
            if (isPalindrome($str)) 
            echo("Yes"); 
            else
            echo("No"); 
          
            return 0; 
        } 
    ?>
</body>
</html>