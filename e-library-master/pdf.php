                            <?php  
                                include 'fun/connect.php';
                                if(isset($_POST['submit'])){
    
	                               
                                    $search1="SELECT * FROM `books` ";
                                    $result1 = $conn->query($search1);
                                    
                                    $row1=$result1->fetch_assoc()
                                  //      echo '$row' ;
                            ?>
                                <div class="view-book">
                             <?php
                                $pdfname = $row1['pdf-file'];
                                $file=" $pdfname ";    
                                header('Content-type:application/pdf');
                                header('Content-Decription:inline;filename="'.$file.'"');
                                header('Content-Transfer:binary');
                                header('Content-ranges:bytes');
                                @readfile(@file);
                                }
                            ?>
                            </div>