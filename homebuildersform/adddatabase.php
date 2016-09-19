<?php
$servername = "localhost";
$username = "kwarap3";
$password = "kp316####";
$dbname = "kwarap3_housingproject";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); } 

           $nameErr = $ParentcompanyErr = $yearsinbusinessErr = $headquatersAddrErr = $contactpersonErr = $phoneNumberErr = $emailErr = $homeSpecs1Err = $homeSpecs2Err = $homeSpecs3Err = $homeSpecs4Err = $homeSpecs5Err = $homeSpecs6Err = $homeSpecs7Err = $homeValueSpecs1Err = $homeValueSpecs2Err = $homeValueSpecs3Err = $homeValueSpecs4Err = $homeValueSpecs5Err = $involvmentErr = $involvmentSiteErr = $involvmentPartnersErr = $PmodePErr = $MorgagePartnersErr = $MorgagePartnersnameErr = $eligibilityform1Err = $eligibilityform2Err = $eligibilityform3Err = $eligibilityform4Err = $eligibilityform5Err = $eligibilityform6Err = $eligibilityform7Err = $eligibilityformMortPErr = $capabilityErr = $typeofPartErr = "";

             $name = $Parentcompany = $yearsinbusiness = $headquatersAddr = $contactperson = $phoneNumber = $email = $homeSpecs1 = $homeSpecs2 = $homeSpecs3 = $homeSpecs4 = $homeSpecs5 = $homeSpecs6 = $homeSpecs7 = $homeValueSpecs1 = $homeValueSpecs2 = $homeValueSpecs3 = $homeValueSpecs4 = $homeValueSpecs5 = $involvment = $involvmentSite = $involvmentPartners = $PmodeP = $MorgagePartners = $MorgagePartnersname = $eligibilityform1 = $eligibilityform2 = $eligibilityform3 = $eligibilityform4 = $eligibilityform5 = $eligibilityform6 = $eligibilityform7 = $eligibilityformMortP = $capability = $typeofPart = "";

             if ($_SERVER["REQUEST_METHOD"] == "POST") {

                if (empty($_POST["name"])) {
                   $nameErr = "Name is required";
                }   else {
                        $name = test_input($_POST["name"]);
                    }

                if (empty($_POST["Parentcompany"])) {
                    $ParentcompanyErr = "Age is required";
                }   else {
                         $Parentcompany = test_input($_POST["Parentcompany"]);
                   }    

                if (empty($_POST["yearsinbusiness"])) {
                   $yearsinbusinessErr = "Gender is required";
                 } else {
                        $yearsinbusiness = test_input($_POST["yearsinbusiness"]);
                    }   

                if (empty($_POST["headquatersAddr"])) {
                   $headquatersAddrErr = "Address is required";
                 } else {
                        $headquatersAddr = test_input($_POST["headquatersAddr"]);
                    }
                 
                if (empty($_POST["contactperson"])) {
                   $contactpersonErr = "Address is required";
                 } else {
                        $contactperson = test_input($_POST["contactperson"]);
                    }

                if (empty($_POST["phoneNumber"])) {
                   $phoneNumberErr = "Address is required";
                 } else {
                        $phoneNumber = test_input($_POST["phoneNumber"]);
                    }

                if (empty($_POST["email"])) {
                   $emailErr = "Address is required";
                 } else {
                        $email = test_input($_POST["email"]);
                    }

                if (empty($_POST["homeSpecs1"])) {
                   $homeSpecs1Err = "Address is required";
                 } else {
                        $homeSpecs1 = test_input($_POST["homeSpecs1"]);
                    }

                 if (empty($_POST["homeSpecs2"])) {
                   $homeSpecs2Err = "Address is required";
                 } else {
                        $homeSpecs2 = test_input($_POST["homeSpecs2"]);
                    }

                 if (empty($_POST["homeSpecs3"])) {
                   $homeSpecs3Err = "Address is required";
                 } else {
                        $homeSpecs3 = test_input($_POST["homeSpecs3"]);
                    }

                 if (empty($_POST["homeSpecs4"])) {
                   $homeSpecs4Err = "Address is required";
                 } else {
                        $homeSpecs4 = test_input($_POST["homeSpecs4"]);
                    }

                 if (empty($_POST["homeSpecs5"])) {
                   $homeSpecs5Err = "Address is required";
                 } else {
                        $homeSpecs5 = test_input($_POST["homeSpecs5"]);
                    }

                 if (empty($_POST["homeSpecs6"])) {
                   $homeSpecs6Err = "Address is required";
                 } else {
                        $homeSpecs6 = test_input($_POST["homeSpecs6"]);
                    }

                 if (empty($_POST["homeSpecs7"])) {
                   $homeSpecs7 = "Address is required";
                 } else {
                        $homeSpecs7 = test_input($_POST["homeSpecs7"]);
                    }

                if (empty($_POST["homeValueSpecs1"])) {
                   $homeValueSpecs1Err = "Address is required";
                 } else {
                        $homeValueSpecs1 = test_input($_POST["homeValueSpecs1"]);
                    }

                if (empty($_POST["homeValueSpecs2"])) {
                   $homeValueSpecs2Err = "Address is required";
                 } else {
                        $homeValueSpecs2 = test_input($_POST["homeValueSpecs2"]);
                    }

                if (empty($_POST["homeValueSpecs3"])) {
                   $homeValueSpecs3Err = "Address is required";
                 } else {
                        $homeValueSpecs3 = test_input($_POST["homeValueSpecs3"]);
                    }

                 if (empty($_POST["homeValueSpecs4"])) {
                   $homeValueSpecs4Err = "Address is required";
                 } else {
                        $homeValueSpecs4 = test_input($_POST["homeValueSpecs4"]);
                    }

                 if (empty($_POST["homeValueSpecs5"])) {
                   $homeValueSpecs5Err = "Address is required";
                 } else {
                        $homeValueSpecs5 = test_input($_POST["homeValueSpecs5"]);
                    }

                 if (empty($_POST["involvment"])) {
                   $involvmentErr = "Address is required";
                 } else {
                        $involvment = test_input($_POST["involvment"]);
                    }

                 if (empty($_POST["involvmentSite"])) {
                   $involvmentSiteErr = "Address is required";
                 } else {
                        $involvmentSite = test_input($_POST["involvmentSite"]);
                    }

                if (empty($_POST["involvmentPartners"])) {
                   $involvmentPartnersErr = "Address is required";
                 } else {
                        $involvmentPartners = test_input($_POST["involvmentPartners"]);
                    }

                if (empty($_POST["PmodeP"])) {
                   $PmodePErr = "Address is required";
                 } else {
                        $PmodeP = test_input($_POST["PmodeP"]);
                    }

                 if (empty($_POST["MorgagePartners"])) {
                   $MorgagePartnersErr = "Address is required";
                 } else {
                        $MorgagePartners = test_input($_POST["MorgagePartners"]);
                    }
                 
                 if (empty($_POST["MorgagePartnersname"])) {
                   $MorgagePartnersnameErr = "Address is required";
                 } else {
                        $MorgagePartnersname = test_input($_POST["MorgagePartnersname"]);
                    }
                
                 if (empty($_POST["eligibilityform1"])) {
                   $eligibilityform1Err = "Address is required";
                 } else {
                        $eligibilityform1 = test_input($_POST["eligibilityform1"]);
                    }
                
                 if (empty($_POST["eligibilityform2"])) {
                   $eligibilityform2Err = "Address is required";
                 } else {
                        $eligibilityform2 = test_input($_POST["eligibilityform2"]);
                    }
                 if (empty($_POST["eligibilityform3"])) {
                   $eligibilityform3Err = "Address is required";
                 } else {
                        $eligibilityform3 = test_input($_POST["eligibilityform3"]);
                    }

                if (empty($_POST["eligibilityform4"])) {
                   $eligibilityform4Err = "Address is required";
                 } else {
                        $eligibilityform4 = test_input($_POST["eligibilityform4"]);
                    }

                if (empty($_POST["eligibilityform5"])) {
                   $eligibilityform5Err = "Address is required";
                 } else {
                        $eligibilityform5 = test_input($_POST["eligibilityform5"]);
                    }

                if (empty($_POST["eligibilityform6"])) {
                   $eligibilityform6Err = "Address is required";
                 } else {
                        $eligibilityform6 = test_input($_POST["eligibilityform6"]);
                    }

                if (empty($_POST["eligibilityform7"])) {
                   $eligibilityform7Err = "Address is required";
                 } else {
                        $eligibilityform7 = test_input($_POST["eligibilityform7"]);
                    }

                if (empty($_POST["capability"])) {
                   $capabilityErr = "Address is required";
                 } else {
                        $capability = test_input($_POST["capability"]);
                    }

                if (empty($_POST["typeofPart"])) {
                   $typeofPartErr = "Address is required";
                 } else {
                        $typeofPart = test_input($_POST["typeofPart"]);
                    }

            }   else{header("Location: error.php");} 

             function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
                                        }

             $sql = "INSERT INTO homebuildersform (name, Parentcompany, yearsinbusiness, headquatersAddr, contactperson, phoneNumber, email, homeSpecs1, homeSpecs2, homeSpecs3, homeSpecs4, homeSpecs5, homeSpecs6, homeSpecs7, homeValueSpecs1, homeValueSpecs2, homeValueSpecs3, homeValueSpecs4, homeValueSpecs5, involvment, involvmentSite, involvmentPartners, PmodeP, MorgagePartners, MorgagePartnersname, eligibilityform1, eligibilityform2, eligibilityform3, eligibilityform4, eligibilityform5, eligibilityform6, eligibilityform7, capability, typeofPart)
                    VALUES ( '$name', '$Parentcompany', '$yearsinbusiness', '$headquatersAddr', '$contactperson', '$phoneNumber', '$email', '$homeSpecs1', '$homeSpecs2', '$homeSpecs3', '$homeSpecs4', '$homeSpecs5', '$homeSpecs6', '$homeSpecs7','$homeValueSpecs1', '$homeValueSpecs2', '$homeValueSpecs3', '$homeValueSpecs4', '$homeValueSpecs5', '$involvment', '$involvmentSite', '$involvmentPartners', '$PmodeP', '$MorgagePartners', '$MorgagePartnersname' , '$eligibilityform1', '$eligibilityform2', '$eligibilityform3', '$eligibilityform4', '$eligibilityform5', '$eligibilityform6', '$eligibilityform7', '$capability', '$typeofPart')";

                    if ($conn->multi_query($sql) === TRUE) {
                       echo "Thank you for taking time ti fill this form, Your record has beeen created, we would get in touch with you incase additional information is required, you can now close this window";
                             } else {
                                   echo "Error: " . $sql . "<br>" . $conn->error;
                                    }


            $conn->close();
            ?>
