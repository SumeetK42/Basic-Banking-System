<!DOCTYPE html>
<title>National Heritage Bank</title>
<link rel="stylesheet" href="sty3.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
    <div class="container" id="sd" >

        <div class="header">
        <a href="Home.html"><span class="logo"><img src="NHB_Bank.png" alt="logo"/></span></a>
        <h2 class="bank" style="text-align: center;
    flex: 1;
    justify-content: center;
    align-content: center;
    align-items: center;">National Heritage Bank</h2>
        </div>


        <div class="send">
                <form action="sen.php" method="post">
                
                <div class="from">
                <h1 style="text-align: center">From</h1>
                    <input type="text" name="Name" placeholder="Name">
                    <Input type="email" name="email" placeholder="Email">
                </div>

                <input type="submit" name="Send" value="Send">

                <div class="to">
                <h1 style="text-align: center">TO</h1>
                    <input type="text" name="Name2" placeholder="Name">
                    <Input type="email" name="email2" placeholder="Email">
                    <input type="text" name="Balance" placeholder="Amount in Rupees">
               </div>

                </form>

            </div>

        
        <div class="footer">
        <h2>All Copyrights are reserverd @NHB 2020-2021</h2>
        </div>     
    </div>
</body>
</html>