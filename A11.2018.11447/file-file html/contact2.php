<!DOCTYPE html>
<html>
    <head>
        <title> Baguszzone </title>
        <link rel="stylesheet" href="../CSS/style.css">
    </head>

    <body class="bg">
        <div id="container">
        <img src="../images/icon7.jpg" id="icon" height="50 px" width="100 px">
        
        <div class="menu">
            <a href="home.html" id="home"><img src="../images/homeicon.png" height="20 px" width="20 px"> </a> | 
            <a href="about.html" id="about"> About </a> | 
            <a href="blog.html" id="blog"> blog </a> | 
            <a href="contact.html" id="contact"> Contact Us </a>
        </div>



        <br><br><br>
        
        <div id="output">
            <table border="0">
                <tr>
                    <th>Username : </th>
                    <td>
                        <?php echo $_GET['username']; ?>
                    </td>
                </tr>
                <tr>
                    <th>Comment : </th>
                    <td>
                        <?php echo $_GET['comment']; ?>
                    </td>
                </tr>
            </table>
        </div>

        <p style="color:white">
            thanks! we will read your message soon <br>
            Thank you for your visit, see you
        </p>

        
        <div id="footer">
            <p>copyright &copy; 2019 by Bagus T </p>
        </div>
        </div>

    </body>
</html>