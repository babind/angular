<HTML>
<HEAD>
<TITLE>Dynamically add Textbox, Radio, Button in html Form using JavaScript</TITLE>
<SCRIPT language="javascript">
function add(type) {

    //Create an input type dynamically.
    var element = document.createElement("input");

    //Assign different attributes to the element.
    element.setAttribute("type", type);
    element.setAttribute("value", type);
    element.setAttribute("name", type);


    var foo = document.getElementById("fooBar");

    //Append the element in page (in span).
    foo.appendChild(element);

}
</SCRIPT>
</HEAD>
<BODY>
<FORM>
<H2>Dynamically add element in form.</H2>
Select the element and hit Add to add it in form.
<BR/>
<SELECT name="element">
    <OPTION value="button">Button</OPTION>
    <OPTION value="text">Textbox</OPTION>
    <OPTION value="radio">Radio</OPTION>
</SELECT>

<INPUT type="button" value="Add" onclick="add(document.forms[0].element.value)"/>

<span id="fooBar">&nbsp;</span>

</FORM>
</BODY>
</HTML>