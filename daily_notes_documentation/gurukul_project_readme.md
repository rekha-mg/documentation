##Feature of Gurukula website
* Login
* Register New User
* user can mail to website in return website team send a welcome mail.

##Features of Admin

* view/add/edit -   Logos of Company who is already register
* view visitors list
* view Register member list

###Data Interactions
  * Register
  -----
 * input- user properties 
 * business logic - validation ,store to db.
 * output - success / failer
 api type:post - input goes in body
 ___
 
 {
      "name":"Rekha",
      "emailid":"rekha@123.com"
       "password":"rekha123"
       }
   ___
   
## Login 
  * input- emailid, password
  * business logic - validation ,check in  db.
  * output - success / failer
   api type:post - input goes in body
   ___
   {
     "name":"Rekha",
     "emailid":"rekha@123.com"
      "password":"rekha123"
      }
 ___
    
##Mail
 * input - emailid, message.
 * business - sends mail to gurukul mail
              store email id and msg in email_history table.
 * output -  if send mail is true send success else failed.             
  api type:get- goes in url
   ___
{   
 
"name":"Rekha",
  "emaill":"rekhamg12@gmail.com",
    "msg":"Ur website is informative"

}
 ___
 
 
## Dashboard - visitor and logo count 
  * input - null
  * business Logic - get select count of visitors/logo
  * output -count of visitors and logo
  
  
##Logos - edit/delete/add.
   * add Logo 
   * input - logo type,url
   * business logic - download load logo to system folder, copy to wesite folder.
                    ,auto generate logo name, store logo information in db .
   * output- if success send logo name.if fail send error msg.
  ___
    
   {
    "img_name":"flower1.jpg"
    }
  ___
    
#delete
  input - logo name
  business - delete logo where logo=logoname from db.
  output - sucessfully deleted/ or failed.
 ___
  {
      "img_name":"flower1.jpg"
      }
 ___
####Recognizing object
user-registered
logo
vistors
