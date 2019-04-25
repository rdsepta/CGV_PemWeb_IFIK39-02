   <div id="mainContent" class="contact">
    <a href=''><div style="cursor: hand; width: 100%; height: 60px; margin-bottom: -60px;" ></div></a>
    <!-- title -->
        <div id="pagebody">
        <div id="pagetitle">
        <img src="http://www.cgv.com/images/title_contact_us.gif" alt="contact" />
        </div>
            
        <h1></h1>
           
        <p>Tasting Room: 408.867.7116</p>           
        <div class="clear"></div>
        
          <script language="javascript">
            function checkform() {
                if(document.contact.name.value == "") {
                    alert("Please enter your name.");
                    return false;
                }                   
                if(document.contact.email.value == "") {
                    alert("Please enter your E-Mail address.");
                    return false;
                }                   
                if(document.contact.message.value == "") {
                    alert("Please enter a message.");
                    return false;
                }                   
                return true;
            }
          </script>
          <form name='contact' action='http://www.cgv.com/contact/post' method='POST' onSubmit="return checkform()">
            <h1>Send Us an Email</h1>
            <div style="float:left; width:250px;">
          <strong>Your Name:</strong><br />
          <input name="name" type="text" size="25" maxlength="55" />
          <br /><br />
          
          <strong>Email Address:</strong><br />
          <input name="email" type="text" size="25" maxlength="55" />
          <br><br>
          
          <strong>ZIP Code:</strong><br />
          <input name="zip" type="text" size="25" maxlength="55" />
          
          </div>
          
          <div style="float:left">
          <strong>Send To:</strong><br />
            <label>
            <input type="radio" name="sendto" value="vineyards" id="sendto_0" checked="checked" />
              Vineyards</label>
            <br />
            <label>
              <input type="radio" name="sendto" value="stables" id="sendto_1" />
              Stables</label>-Tel: 408-867-9527
          </div>
          
             <div class="clear"></div>
          <br /><br />
          
          <strong>Message:</strong><br />
          <textarea name="message" cols="55" rows="10"></textarea>
          <br />
          <br />
                    <img id="captcha" src="http://www.cgv.com/php/securimage/securimage_show.php" alt="CAPTCHA Image" /><a href="#" onclick="document.getElementById('captcha').src = 'http://www.cgv.com/php/securimage/securimage_show.php?' + Math.random(); return false" >Refresh</a>
    <br /><br />
    
    Please enter the text from the image above:<br />
    <input name="captcha_code" type="text" size="8" maxlength="6" />
    <br /><br />
          
          <br />
          <br />
          
          <input name="submit" type="submit" value="Send" />
          </form>
      </div>
    </div>
</div>