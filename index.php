<html>
    <header>
        <link rel="stylesheet" href="style.css">
        <title>translation</title>
    </header>
    <body >
        
    <div>
    <marquee width="100%" direction="right" height="100px" >
WELCOME TO TRANSLATION PAGE
</marquee>

<table width="20%" cellspacing="40" border="0">
<tr>
    <td><a href="index.php">Home</a></td>
    <td><a href="create.php">Insert new word</a> </td>
</td>
      
  </tr>
  </table>

    </div>
        <div class="card" align="center" >
    
        <h2 class="title">
            translate
        </h2>
        

        <hr class="line">
        <div class="content">
            <form method="post">

            <!-- <label class="label_class">choose word</label>
            <select name="word">
                <option>word</option>
            </select>
            <label for=""></label> -->
            <table border="0">
                
                <tr>
                    <td>
                        <h3 class="label__class">Word: </h3>
                    </td>
                    <td>
                        <h3>
                            <select name="word" class="label__class">
                            <option value="0">Word</option>
                            <?php
                            require_once "connect.php";
                            $result=[" "];
                            $query_select_words=$connect->query("SELECT id,variable FROM language");
                            while($row_words=$query_select_words->fetch_array())
                            {
                                $var_id = $row_words['id'];
                                $var_word = $row_words['variable'];
                                ?>
                                <option value="<?=$var_id;?>"><?=$var_word;?></option>
                                
                                <?php

                            }
                            
                            ?>
                        </select></h3>
                    </td>
                </tr>
                <tr>
                    <td>
                    <h3 class="label__class">Language: </h3>

                    </td>
                    <td>
                        <h3><select name="language" class="label__class">
                            <option value="0">Languages</option>
                            <option value="1">Kinyarwanda</option>
                            <option value="2">English</option>
                            <option value="3">Swahili</option>
                            <option value="4">French</option>
                        </select></h3>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <button type="submit" name="translate">translate</button>
                    </td>
                </tr>
                <?php
                if(isset($_POST['translate']))
                {
                    $language=$_POST['language'];
                    $word= $_POST['word'];
                    if(($word == 0) || ($language == 0))
                    {
                        $result[0]="choose valid word and valid language";
                    }
             
                    $query= "SELECT * FROM language WHERE id= '$word'";
                    $connect_query=$connect->query($query);
                    $data = $connect_query->fetch_array();

                    if($language == 1)
                    {
                            $result[0] = $data['kinyarwanda'];
                    }
                    elseif($language == 2)
                    {
                        $result[0]=$data['english'];
                    }
                    elseif($language == 3)
                    {
                        $result[0]=$data['swahili'];
                    }
                    elseif($language == 4)
                    {
                     
                        $result[0] = $data['french'];
                    }
                    else{
                        $result[0] = "translation not found";
                    }
                }
                ?>
                <tr>



                   <td colspan="2">
                  
                       <h3 class="label__class">Translation:<?=$result[0];?></h3>
                
                   </td>
                </tr>
     
            </table>

            </form>
        </div>
        </div>
    </body>
</html>