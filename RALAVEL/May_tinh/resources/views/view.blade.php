<html>
    <head>
        <title>Product Discount Calculator</title>
<link rel="stylesheet" href="css/mystyle.css">
        
    </head>

    <body>
        <div id="content">
            <h1>Product Discount Calculator</h1>
            <form method="post" action="/product">
            @csrf
                <div id="data">
                    <label>Product Description:</label>
                    <input type="text" name="product"/><br/>
                    <label>List Price:</label>
                    <input type="text" name="price"/>VND<br/>
                    <label>Discount Percent:</label>
                    <input type="text" name="discount"/>(%)<br/>
                </div>
                <div id="buttons">
                    <label>&nbsp;</label>
                    <input type="submit" value="Calculate Discount"/>
                </div>
            </form>
        </div>
    </body>
</html>

