<?php
$servername = "localhost";
$username = "kwarap3";
$password = "kp316####";
$dbname = "kwarap3_housingproject";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); } 

            $NameErr = $AgeErr = $GenderErr = $ResAddrErr = $LGAOriginErr = $TelNoErr = $EmailErr = $StaffNoErr = $StaffNootherErr = $WorkAddrErr = $RetirementYearErr = $IncomeErr = $maritalstatErr = $noochildrenErr = $HomeOwnerStatusErr = $HomeType1Err = $HomeType2Err = $HomeType3Err = $HomeType4Err = $HomeType5Err = $HomeType6Err = $HomeType7Err = $HomeTypeErr = $PaymentPowerErr = $PaymentModeErr = $ServicingALoanErr = $CoperativeLoanErr = $CoperativeLoan1Err = $GovernmentLoanErr = $InterestRateErr = $TenorofMortgageErr = $TimeonMortgageErr = $EquityConErr = "";

             $Name = $Age = $Gender = $ResAddr = $LGAOrigin = $TelNo = $Email = $StaffNo = $StaffNoother = $WorkAddr = $RetirementYear = $Income = $maritalstat = $noochildren = $HomeOwnerStatus = $HomeType1 = $HomeType2 = $HomeType3 = $HomeType4 = $HomeType5 = $HomeType6 =$HomeType7 = $HomeType = $PaymentPower = $PaymentMode = $ServicingALoan = $CoperativeLoan = $CoperativeLoan1 = $GovernmentLoan = $InterestRate = $TenorofMortgage = $TimeonMortgage = $EquityCon = "";

             if ($_SERVER["REQUEST_METHOD"] == "POST") {

                if (empty($_POST["Name"])) {
                   $NameErr = "Name is required";
                }   else {
                        $Name = test_input($_POST["Name"]);
                    }

                if (empty($_POST["Age"])) {
                    $AgeErr = "Age is required";
                }   else {
                         $Age = test_input($_POST["Age"]);
                   }    

                if (empty($_POST["Gender"])) {
                   $GenderErr = "Gender is required";
                 } else {
                        $Gender = test_input($_POST["Gender"]);
                    }   

                if (empty($_POST["ResAddr"])) {
                   $ResAddrErr = "Address is required";
                 } else {
                        $ResAddr = test_input($_POST["ResAddr"]);
                    }

                if (empty($_POST["LGAOrigin"])) {
                   $LGAOriginErr = "LGA of Origin is required";
                 } else {
                        $LGAOrigin = test_input($_POST["LGAOrigin"]);
                    }

                if (empty($_POST["LGARes"])) {
                   $LGAResErr = "This field is required";
                 } else {
                        $LGARes = test_input($_POST["LGARes"]);
                    }

                if (empty($_POST["TelNo"])) {
                   $TelNoErr = "Phone number is required";
                 } else {
                        $TelNo = test_input($_POST["TelNo"]);
                    }

                if (empty($_POST["Email"])) {
                   $EmailErr = "Email is required";
                 } else {
                        $Email = test_input($_POST["Email"]);
                    }
                
                if (empty($_POST["StaffNo"])) {
                   $StaffNoErr = "This Field is required";
                 } else {
                        $StaffNo = test_input($_POST["StaffNo"]);
                    }

                if (empty($_POST["StaffNoother"])) {
                   $StaffNootherErr = "Address is required";
                 } else {
                        $StaffNoother = test_input($_POST["StaffNoother"]);
                    }    

                if (empty($_POST["WorkAddr"])) {
                   $WorkAddrErr = "Address is required";
                 } else {
                        $WorkAddr = test_input($_POST["WorkAddr"]);
                    }    

                if (empty($_POST["RetirementYear"])) {
                   $RetirementYearErr = "Address is required";
                 } else {
                        $RetirementYear = test_input($_POST["RetirementYear"]);
                    }

                if (empty($_POST["Income"])) {
                   $IncomeErr = "Address is required";
                 } else {
                        $Income = test_input($_POST["Income"]);
                    }
                 
                if (empty($_POST["maritalstat"])) {
                   $maritalstatErr = "Address is required";
                 } else {
                        $maritalstat = test_input($_POST["maritalstat"]);
                    }
                 
                if (empty($_POST["noochildren"])) {
                   $noochildrenErr = "Address is required";
                 } else {
                        $noochildren = test_input($_POST["noochildren"]);
                    }

                if (empty($_POST["HomeOwnerStatus"])) {
                   $HomeOwnerStatusErr = "Address is required";
                 } else {
                        $HomeOwnerStatus = test_input($_POST["HomeOwnerStatus"]);
                    }

                if (empty($_POST["HomeType1"])) {
                   $HomeType1Err = "Address is required";
                 } else {
                        $HomeType1 = test_input($_POST["HomeType1"]);
                    }
                    
                if (empty($_POST["HomeType2"])) {
                   $HomeType2Err = "Address is required";
                 } else {
                        $HomeType2 = test_input($_POST["HomeType2"]);
                    }        

                if (empty($_POST["HomeType3"])) {
                   $HomeType3Err = "Address is required";
                 } else {
                        $HomeType3 = test_input($_POST["HomeType3"]);
                    }
                    
                if (empty($_POST["HomeType4"])) {
                   $HomeType4Err = "Address is required";
                 } else {
                        $HomeType4 = test_input($_POST["HomeType4"]);
                    }
                    
                if (empty($_POST["HomeType5"])) {
                   $HomeType5Err = "Address is required";
                 } else {
                        $HomeType5 = test_input($_POST["HomeType5"]);
                    }            

                if (empty($_POST["HomeType6"])) {
                   $HomeType6Err = "Address is required";
                 } else {
                        $HomeType6 = test_input($_POST["HomeType6"]);
                    }    

                if (empty($_POST["HomeType7"])) {
                   $HomeType7Err = "Address is required";
                 } else {
                        $HomeType7 = test_input($_POST["HomeType7"]);
                    }    

                if (empty($_POST["HomeType"])) {
                   $HomeTypeErr = "Address is required";
                 } else {
                        $HomeType = test_input($_POST["HomeType"]);
                    }    

                if (empty($_POST["PaymentPower"])) {
                   $PaymentPowerErr = "Address is required";
                 } else {
                        $PaymentPower = test_input($_POST["PaymentPower"]);
                    }    

                if (empty($_POST["PaymentMode"])) {
                   $PaymentModeErr = "Address is required";
                 } else {
                        $PaymentMode = test_input($_POST["PaymentMode"]);
                    }    

                if (empty($_POST["ServicingALoan"])) {
                   $ServicingALoanErr = "Address is required";
                 } else {
                        $ServicingALoan = test_input($_POST["ServicingALoan"]);
                    }
                    
                if (empty($_POST["CoperativeLoan"])) {
                   $CoperativeLoanErr = "Address is required";
                 } else {
                        $CoperativeLoan = test_input($_POST["CoperativeLoan"]);
                    }
                 
                  if (empty($_POST["CoperativeLoan1"])) {
                   $CoperativeLoan1Err = "Address is required";
                 } else {
                        $CoperativeLoan1 = test_input($_POST["CoperativeLoan1"]);
                    }
                    
                if (empty($_POST["GovernmentLoan"])) {
                   $GovernmentLoanErr = "Address is required";
                 } else {
                        $GovernmentLoan = test_input($_POST["GovernmentLoan"]);
                    }
                    
                if (empty($_POST["InterestRate"])) {
                   $InterestRateErr = "Address is required";
                 } else {
                        $InterestRate = test_input($_POST["InterestRate"]);
                    }                

                if (empty($_POST["TenorofMortgage"])) {
                   $TenorofMortgageErr = "Address is required";
                 } else {
                        $TenorofMortgage = test_input($_POST["TenorofMortgage"]);
                    } 
                 
                 if (empty($_POST["TimeonMortgage"])) {
                   $TimeonMortgageErr = "Address is required";
                 } else {
                        $TimeonMortgage = test_input($_POST["TimeonMortgage"]);
                    }    
            }   else{header("Location: error.php");} 

             function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
                                        }

             $sql = "INSERT INTO homeownersform (Name, Age, Gender, ResAddr, LGAOrigin, TelNo, Email, StaffNo, StaffNoother, WorkAddr, RetirementYear, Income, maritalstat, noochildren, HomeOwnerStatus, HomeType1, HomeType2, HomeType3, HomeType4, HomeType5, HomeType6, HomeType7, HomeType, PaymentPower, PaymentMode, ServicingALoan, CoperativeLoan, CoperativeLoan1, GovernmentLoan, InterestRate, TenorofMortgage, TimeonMortgage)
                    VALUES ( '$Name', '$Age', '$Gender', '$ResAddr', '$LGAOrigin', '$TelNo', '$Email', '$StaffNo', '$StaffNoother', '$WorkAddr', '$RetirementYear', '$Income' , '$maritalstat', '$noochildren' , '$HomeOwnerStatus', '$HomeType1', '$HomeType2', '$HomeType3', '$HomeType4', '$HomeType5', '$HomeType6', '$HomeType7', '$HomeType', '$PaymentPower', '$PaymentMode', '$ServicingALoan', '$CoperativeLoan', '$CoperativeLoan1', '$GovernmentLoan', '$InterestRate', '$TenorofMortgage', '$TimeonMortgage')";

                    if ($conn->multi_query($sql) === TRUE) {
                       echo "Thank you for taking time to fill this form, Your record has beeen created, we would get in touch with you incase additional information is required, you can now close this window";
                             } else {
                                   echo "Error: " . $sql . "<br>" . $conn->error;
                                    }


            $conn->close();
            ?>