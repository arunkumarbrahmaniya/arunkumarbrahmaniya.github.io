<!DOCTYPE html>
<html>
    <head>
<?php include("chkUser.php"); ?>        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Admin Home Page</title> 
        <link href="style/mycss.css" rel="stylesheet" type="text/css" />

    </head>
    <body>
    <center>
        <table class="table">
            <tr>
                <td width="100%" height="250px" valign="top">
                    <?php include("header.html")?>
                </td>
            </tr>
            <tr>
                <td width="100%" valign="top">
                    <?php include("hmenu.html")?>
                </td>
            </tr>


            <tr>
                <td width="100%" height="400px" valign="top">
                    <h2>Home
                    </h2>
                    <p style="text-align: justify;">
                        &nbsp;&nbsp; This project is aimed at developing an <b>Co-operative Leading Library </b> for the <b>college library</b>. This is an <b>Intranet based application</b> that can be accessed throughout the campus. This system can be used to search for books/magazines, reserve books, find out who is having a particular book, put in requests to buy a new book etc. This is one integrated system that contains both the user component and the librarian component. There are features like email notifications/reminders, report generators etc in this system.
                    </p>
                    <p style="text-align: justify;">
                        &nbsp;&nbsp; The <b>Co-operative Leading Library </b> is designed & developed for a receipt and issuance of books in the library along with the student’s details. The books received in the library are entered in Books Entry form and the new student is entered in the student entry form. When the student wants to get the desired book the same is issued on the availability basis to the student. The issuance and due date for the returning of the book is also entered into the Book Issue form under third menu Book Issue. The student has to pay the fine if any on the basis of no. of days delayed deposit of the book in the library. . Library Automation applications provide integration of self-service kiosks and online web portal access for catalog search, content delivery or reservation requests and patron check-out history. They also track and manage notification of overdue books and fines. This system can manage all the happenings of the Library. Book transactions including Book Registration, Students Registration, Book Issuing, Current Status of a particular books etc. can be very easily handled by this module. Overall this system can be very helpful and it can make things easier.
                    </p>
                    <br>
                    <br>
                    <p>&nbsp;</p>
            <center>
                <div style="width: 550px;height: 15px;text-align: justify;background-color:#ffffcc;font-size: 10px;">
                    The  Books will be issue for 7 days from date of issued only . Fine Rs. 1.50/- per day after 7 days
                </div>

            </center>
            </td>
            </tr>
        </table>
        <?php include("footer.html")?>
    </center>
</body>
</html>
