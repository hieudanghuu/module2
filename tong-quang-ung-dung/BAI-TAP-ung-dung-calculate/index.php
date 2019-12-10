<html>
<style>
#content{
    width: 450px;
    margin: 0 auto;
    padding: 0px 20px 20px;
    background: white;
    border: 2px solid navy;
}

h1{
    color: navy;
}

label{
    width: 10em;
    padding-right: 1em;
    float: left;
}

#data input{
    float: left;
    width: 15em;
    margin-bottom: .5em;
}

#buttons input{
    text-align: center;
    margin-bottom: .5em;
}
br{
    clear: left;
}
.error{
    color: red;
}
</style>
<body>

    <div id="content">
        <h1>Simple Calculator</h1>
        <form action="calculate.php" method="post">
            <div id=data> 
                <h2>Calculator</h2>
                <label>First operand:</label><input type="text" name="num1"><br><br>
                <label>Operator:</label>
                <select name="tinh">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">x</option>
                    <option value="/">:</option>
                </select><br><br>
                <label>Second operator :</label> <input type="text" name="num2"><br><br>
            </div>
            <div id="buttons">
                <input type="submit" value="calculate">
            </div>
        </form>
    </div>

</body>

</html>