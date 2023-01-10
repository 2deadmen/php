<?php
  $p_id=$_GET['q'];
  require('dbconnect.php');
 //h_personal
  echo "<table><tr>";
  $sql1 = "SELECT * FROM h_personal_details where Parent_id=$p_id limit 1";
        $result = $conn->query($sql1);

       if($result->num_rows>0)//when db records are found store in associative array...
         {
                 // output data of each row
            echo "<td>";
            
                 echo " <h3> h_personal_details </h3>    ";      
             while($row = $result->fetch_assoc())
              {
            
               echo "<div> husband name:".$row['HName']."</div>";
               echo "<div> husband address:".$row['address']."</div>";
               echo "<div> husband phone:".$row['Phone_No']."</div>";
               echo "<div> husband education:".$row['Education']."</div>";
               echo "<div> husband religion:".$row['Religion']."</div>";
               echo "<div> husband mothertounge:".$row['Mothertongue']."</div>";
               echo "<div> Marriage_Date:".$row['Marriage_Date']."</div>";
               echo "<div> Marriage_Place:".$row['Marriage_Place']."</div>";

               $content=stripslashes(base64_encode($row['PAN_card']));
               echo '<a title="Download PDF" download="PAN.pdf" href="data:application/pdf;base64,'.$content.'">Click here to download PAN card</a> <br/
               >';
               $content=stripslashes(base64_encode($row['marriagedoc']));
               echo '<a title="Download PDF" download="marriagedoc.pdf" href="data:application/pdf;base64,'.$content.'">Click here to download marriagedoc</a> <br/>';
               $content=stripslashes(base64_encode($row['Adhar_card']));
               echo '<a title="Download PDF" download="Adhar_card.pdf" href="data:application/pdf;base64,'.$content.'">Click here to download Adhar_card</a><br/>';

              $content=stripslashes(base64_encode($row['Medical_cer']));
               echo '<a title="Download PDF" download="Medical_cer.pdf" href="data:application/pdf;base64,'.$content.'">Click here to download Medical_cer</a><br/>';

               $content=stripslashes(base64_encode($row['Bank_Details']));
               echo '<a title="Download PDF" download="Bank_Details.pdf" href="data:application/pdf;base64,'.$content.'">Click here to download Bank_Details	</a><br/>';

               
               $content=stripslashes(base64_encode($row['Signature']));
               echo '<a title="Download PDF" download="Signature.pdf" href="data:application/pdf;base64,'.$content.'">Click here to download Signature	</a><br/></td>';
              }
            }  else
            {
              echo " <h3> h_personal_details </h3>    ";      

              echo " No DB results";
            }

               ///w_personal
               $sql1 = "SELECT * FROM w_personal_details where Parent_id=$p_id limit 1";
               $result = $conn->query($sql1);
       
              if($result->num_rows>0)//when db records are found store in associative array...
                {
                        // output data of each row
                   echo "<td>";
                   
                        echo " <h3> w_personal_details </h3>    ";      
                    while($row = $result->fetch_assoc())
                     {
                   
                      echo "<div> wife name:".$row['Name']."</div>";
                      echo "<div> wife address:".$row['Address']."</div>";
                      echo "<div> wife phone:".$row['Phone_no']."</div>";
                      echo "<div> wife education:".$row['Educaton']."</div>";
                      echo "<div> wife religion:".$row['Religion']."</div>";
                      echo "<div> wife mothertounge:".$row['mothertounge']."</div>";
                      echo "<div> Marriage_Date:".$row['marriage_date']."</div>";
                      echo "<div> Marriage_Place:".$row['marriage_place']."</div>";
       
                      $content=stripslashes(base64_encode($row['PAN_card']));
                      echo '<a title="Download PDF" download="PAN.pdf" href="data:application/pdf;base64,'.$content.'">Click here to download PAN card</a> <br/
                      >';
                      $content=stripslashes(base64_encode($row['marriagedoc']));
                      echo '<a title="Download PDF" download="marriagedoc.pdf" href="data:application/pdf;base64,'.$content.'">Click here to download marriagedoc</a> <br/>';
                      $content=stripslashes(base64_encode($row['Adhar_card']));
                      echo '<a title="Download PDF" download="Adhar_card.pdf" href="data:application/pdf;base64,'.$content.'">Click here to download Adhar_card</a><br/>';
       
                     $content=stripslashes(base64_encode($row['Medical_certificate']));
                      echo '<a title="Download PDF" download="Medical_cer.pdf" href="data:application/pdf;base64,'.$content.'">Click here to download Medical_cer</a><br/>';
       
                      $content=stripslashes(base64_encode($row['Bank_Details']));
                      echo '<a title="Download PDF" download="Bank_Details.pdf" href="data:application/pdf;base64,'.$content.'">Click here to download Bank_Details	</a><br/>';
       
                      
                      $content=stripslashes(base64_encode($row['signature']));
                      echo '<a title="Download PDF" download="Signature.pdf" href="data:application/pdf;base64,'.$content.'">Click here to download Signature	</a><br/></td></tr>';
                     } 
                    }   else
                    {
                      echo " <h3> w_personal_details </h3>    ";      

                      echo " No DB results";
                    } //end    

                    //h_employment
  echo "<tr>";
  $sql1 = "SELECT * FROM h_employement_det where Parent_id=$p_id limit 1";
        $result = $conn->query($sql1);

       if($result->num_rows>0)//when db records are found store in associative array...
         {
                 // output data of each row
            echo "<td>";
            
                 echo " <h3> h_employement_det </h3>    ";      
             while($row = $result->fetch_assoc())
              {
            
               echo "<div> husband occupation:".$row['occupation']."</div>";
               echo "<div> husband office_address:".$row['office_address']."</div>";
               echo "<div> husband income_salary:".$row['income_salary']."</div>   </td>";
           
              }
            }  else
            {
              echo " <h3> h_employement_det </h3>    ";      

              echo " No DB results";
            }//end
            //wife employment
            $sql1 = "SELECT * FROM w_employement_det where Parent_id=$p_id limit 1";
        $result = $conn->query($sql1);

       if($result->num_rows>0)//when db records are found store in associative array...
         {
                 // output data of each row
            echo "<td>";
            
                 echo " <h3> w_employement_det </h3>    ";      
             while($row = $result->fetch_assoc())
              {
            
               echo "<div> wife occupation:".$row['occupation']."</div>";
               echo "<div> wife office_address:".$row['office_address']."</div>";
               echo "<div> wife income_salary:".$row['income_salary']."</div>   </td></tr>";
           
              }
            }  else
            {
              echo " <h3> w_employement_det </h3>    ";      

              echo " No DB results";
            }//end

           // h-family det
                 echo "<tr>";
  $sql1 = "SELECT * FROM h_fam_details where Parent_id=$p_id limit 1";
        $result = $conn->query($sql1);

       if($result->num_rows>0)//when db records are found store in associative array...
         {
                 // output data of each row
            echo "<td>";
            
                 echo " <h3> h_fam_details </h3>    ";      
             while($row = $result->fetch_assoc())
              {
            
               echo "<div> husband Name:".$row['Name']."</div>";
               echo "<div> husband relationship:".$row['relationship']."</div>";
               echo "<div> husband Age:".$row['Age']."</div>   ";
               echo "<div> husband Occupation:".$row['Occupation']."</div>   ";
               echo "<div> husband liv_st:".$row['liv_st']."</div>   </td>";
           
              }
            }  else
            {
              echo " <h3> h_fam_details </h3>    ";      

              echo " No DB results";
            }//end  
                    
            //wife  family details
            $sql1 = "SELECT * FROM w_fam_details where Parent_id=$p_id limit 1";
            $result = $conn->query($sql1);
    
           if($result->num_rows>0)//when db records are found store in associative array...
             {
                     // output data of each row
                echo "<td>";
                
                     echo " <h3> w_fam_details </h3>    ";      
                 while($row = $result->fetch_assoc())
                  {
                
                   echo "<div> wife Name:".$row['Name']."</div>";
                   echo "<div> wife relationship:".$row['relationship']."</div>";
                   echo "<div> wife Age:".$row['Age']."</div>   ";
                   echo "<div> wife Occupation:".$row['Occupation']."</div>   ";
                   echo "<div> wife liv_st:".$row['liv_st']."</div>   </td></tr>";
               
                  }
                }  else
                {
                  echo " <h3> w_fam_details </h3>    ";      

                  echo " No DB results";
                }//end  

                //child details
                $sql1 = "SELECT * FROM child_info where Parent_id=$p_id limit 1";
            $result = $conn->query($sql1);
    
           if($result->num_rows>0)//when db records are found store in associative array...
             {
                     // output data of each row
                echo "<tr><td>";
                
                     echo " <h3> child_info </h3>    ";      
                 while($row = $result->fetch_assoc())
                  {
                
                   echo "<div> child Name:".$row['Name']."</div>";
                   echo "<div> child Gender:".$row['Gender']."</div>";
                   echo "<div> child Age:".$row['Age']."</div>   ";
                   echo "<div> child Bio_Adopted:".$row['Bio_Adopted']."</div>   </td>";
               
                  }
                }  else
                {
                  echo " <h3> child_info </h3>    ";      

                  echo " No DB results";
                }//end 
               //  autobiography
               $sql1 = "SELECT * FROM autobiography where Parent_id=$p_id limit 1";
            $result = $conn->query($sql1);
    
           if($result->num_rows>0)//when db records are found store in associative array...
             {
                     // output data of each row
                echo "<td>";
                
                     echo " <h3> autobiography </h3>    ";      
                 while($row = $result->fetch_assoc())
                  {
                
                   echo "<div>  Name:".$row['Name']."</div>";
                   echo "<div>  dob:".$row['dob']."</div>";
                   echo "<div>  Education:".$row['Education']."</div>   ";
                   echo "<div>  Occupation:".$row['Occupation']."</div>";
                   echo "<div>  Marital_status:".$row['Marital_status']."</div>";
                   echo "<div>  current_residency:".$row['current_residency']."</div>   ";
                   echo "<div>  relation_type:".$row['relation_type']."</div>   </td></tr>";
               
                  }
                }  else
                {
                  echo " <h3> autobiography </h3>    ";      

                  echo " No DB results";
                }//end        
                //questionaries
                      $sql1 = "SELECT * FROM questionires where Parent_id=$p_id limit 1";
            $result = $conn->query($sql1);
    
           if($result->num_rows>0)//when db records are found store in associative array...
             {
                     // output data of each row
                echo "<td>";
                
                     echo " <h3> questionires </h3>    ";      
                 while($row = $result->fetch_assoc())
                  {
                
                   echo "<div>  Rooms_in_Home:".$row['Rooms_in_Home']."</div>";
                   echo "<div>  Spare_Time:".$row['Spare_Time']."</div>";
                   echo "<div>  Help_at_Home:".$row['Help_at_Home']."</div>   ";
                   echo "<div>  Strng_pnts_Mrg:".$row['Strng_pnts_Mrg']."</div>";
                   echo "<div>  Decision_for_Adopt:".$row['Decision_for_Adopt']."</div>";
                   echo "<div>  Both_wish_Adopt:".$row['Both_wish_Adopt']."</div>";
                   echo "<div>  Fam_Decision:".$row['Fam_Decision']."</div>";
                   echo "<div>  Fam_Reaction:".$row['Fam_Reaction']."</div>   ";
                   echo "<div>  ifNo_Reason:".$row['ifNo_Reason']."</div>";
                   echo "<div>  Strength_as_Parent:".$row['Strength_as_Parent']."</div>";
                   echo "<div>  Child_care:".$row['Child_care']."</div>";
                   echo "<div>  ChildeCare_Absence:".$row['ChildeCare_Absence']."</div>";
                   echo "<div>  Legal_Adopt:".$row['Legal_Adopt']."</div>   ";
                   echo "<div>  Introducer:".$row['Introducer']."</div>   ";
                   echo "<div>  Other_Details:".$row['Other_Details']."</div>   </td>";
               
                  }
                }  else
                {
                  echo " <h3> questionires </h3>    ";      

                  echo " No DB results";
                }//end 
                //other documents
  $sql1 = "SELECT * FROM other_docs where Parent_id=$p_id limit 1";
               $result = $conn->query($sql1);
       
              if($result->num_rows>0)//when db records are found store in associative array...
                {
                        // output data of each row
                   echo "<td>";
                   
                        echo " <h3> other_docs </h3>    ";      
                    while($row = $result->fetch_assoc())
                     {

                      $content=stripslashes(base64_encode($row['affidivit_letter']));
                      echo '<a title="Download PDF" download="affidivit_letter.pdf" href="data:application/pdf;base64,'.$content.'">Click here to download affidivit_letter</a> <br/
                      >';
                      $content=stripslashes(base64_encode($row['Undertaking_Letter']));
                      echo '<a title="Download PDF" download="Undertaking_Letter.pdf" href="data:application/pdf;base64,'.$content.'">Click here to download Undertaking_Letter</a> <br/>';
                      $content=stripslashes(base64_encode($row['Property_declaration']));
                      echo '<a title="Download PDF" download="Property_declaration.pdf" href="data:application/pdf;base64,'.$content.'">Click here to download Property_declaration</a><br/>';
       
                     $content=stripslashes(base64_encode($row['Family_photo']));
                      echo '<a title="Download PDF" download="Family_photo.pdf" href="data:application/pdf;base64,'.$content.'">Click here to download Family_photo</a><br/>';
      
                      $content=stripslashes(base64_encode($row['marriage_certificate']));
                      echo '<a title="Download PDF" download="marriage_certificate.pdf" href="data:application/pdf;base64,'.$content.'">Click here to download marriage_certificate	</a><br/></td></tr>';
                     } 
                    }   else
                    {
                      echo " <h3> other_docs </h3>    ";      

                      echo " No DB results";
                    } //end    
                // reference
             $sql1 = "SELECT * FROM  reference where Parent_id=$p_id limit 1";
            $result = $conn->query($sql1);
    
           if($result->num_rows>0)//when db records are found store in associative array...
             {
                     // output data of each row
                echo "<td>";
                
                     echo " <h3>  reference </h3>    ";      
                 while($row = $result->fetch_assoc())
                  {
                
                   echo "<div>  Name:".$row['Name']."</div>";
                   echo "<div>  Designation:".$row['Designation']."</div>";
                   echo "<div>  Address:".$row['Address']."</div>   ";
                   echo "<div>  Phone_no:".$row['Phone_no']."</div>";
                   echo "<div>  Adhar_No:".$row['Adhar_No']."</div></td></tr>";               
                  }
                }    
                else
                     {
                      echo " <h3>  reference </h3>    ";      

                       echo " No DB results";
                     }
          //end  

   echo "<br/><div id='btns'><button onclick='update(1,$p_id);'>accept </button>&nbsp;<button onclick='update(2,$p_id);'>reject </button> &nbsp;<button onclick='update(3,$p_id);'>keep it pending </button></div><br/>";
         
         
     


?>