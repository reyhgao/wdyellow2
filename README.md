#Project 2 - Fun with Fancy Forms 
Due: April 16th, 11:59pm 
With our help, our client has been able to grow their business and now needs an IT Support System 
Using Project 1 as a starting spot, build something that looks similar to this (below is only 3 of the pages). 
Halifax Canoe and Kayak 
Welcome To Your IT Support System 
Mr First Name. 
Last Name 
Halifax Canoe and Kayak 
Log out 
Hello Admin 
Admin 
Submit 
Here are you options: 
My computer isnt working 
Create New Account 
Halifax Canoe and Kayak 
Log out 
Logout 
So Your Computer Isn't Working 
Have you tried turinging it 
off and on again? 
From a technical perspective, here are the requirements: 
1) PHP Pages with include(s) for both the header and footer page. 
2) An initial form with the 4 fields. Title, first name, last name, and role 
3) Logic that replicates the flowchart below. Note: The three different roles 
4) A decision page that displays specific results based on the role selected 
5) Use of get, post, and session variables for title, first name, last last, and role 
Start 
Title, fName, IName, Role 
Role 
Admin 
Manager 
CEO 
PC Not Working 
New Account 
Lost Password 
Phone Number 
Send Email 
If new account.... 
If lost password 
Log out 
Please Note: Send Email does not need to send an email. It's just a form that can accept an address. 
Supplied Assets: 
- 
The main image: 
https://raw.githubusercontent.com/Zulinov/skills Projects/main/paddle-white.png 
Hamburger icon: 
https://raw.githubusercontent.com/Zulinov/skillsProjects/main/hamburger.png 
Required Pages and Content 
index.php 
header.php (Start session) 
->Button to Logout.php 
Form -> Send values of form to problem.php 
footer.php 
problem.php (depending on form value for role, show the correct links) 
header.php 
if role= 'admin' -> link to: new-account.php and isnt-working.php 
if role = 'manager' ->link to: lost-password.php and isnt-working.php if role = 'ceo' ->link to: need-help.php and isnt-working.php footer.php 
new-account.php 
header.php 
Form -> send-email.php emailType = newAccount 
footer.php 
lost-password.php 
header.php 
Form -> send-email.php emailType = lostPassword 
footer.php 
need-help.php 
Content for CEO, just show a phone number to call 
header.php 
footer.php 
isnt-working.php 
header.php 
Content (Gif of your choice) 
footer.php 
send-email.php 
header.php 
if emailType = newAccount-> just display new account msg 
if emailType = lostPassword-> just display lost password msg footer.php 
logout.php 
header.php 
Destroy session 
Content: Confirm Logout 
footer.php 
Submitting Instructions: 
1) Upload your complete project (html file, css file(s), images, etc.) to GitHub. 
Be sure to include your first name and last name. 
2) Create an account, and upload your project here using this free hosting service. Be sure 
to note the URL of your project. Test to make sure it works as intended 
https://www.000webhost.com/free-php-hosting 
3) Post BOTH your GitHub Repo link and URL your hosted project here here: 
https://forms.gle/rQ7q6ArxnceqAJgL7 