<html>
    <head>
        <title>Product Discount Calculator</title>
        <link rel="stylesheet" href="css/mystyle.css">

    </head>
    <body>
        <div id="content">
            <h1>Product Discount Calculator</h1>
            <form>
                <div id="data">
                    <label>Product Description:</label>
                   <p>{{$product}}</p>

                    <label>List Price:</label>
                    <p>{{$price}} VND</p>

                    <label>Discount Percent:</label>
                    <p>{{$discount}}%</p>

                    <label>Discount Amount:</label>
                    <p>{{$amount}} VND</p>

                    <label>Discount Price:</label>
                     <p>{{$discountprice}} VND </p>
                </div>
            </form>
        </div>
    </body>
</html>
