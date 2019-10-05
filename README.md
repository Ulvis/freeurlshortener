http://ulvis.net
site offers a powerful API to interact with other sites.
# freeurlshortener #urlshortener #linkshortener ,#url , #api
API


Ulvis.net offers a powerful API to interact with other sites.

Simple API
GET requests: http://ulvis.net/api.php?url=YOUR-LONG-URL&custom=YOUR-CUSTOM-NAME&private=1
http://ulvis.net/P
        


Write API Endpoints:
GET requests: http://ulvis.net/API/write/get
POST requets: http://ulvis.net/api/write/post

Variables:

You can pass up to 8 variables to control the response or your application.
url: The url you want to shrink. required.
custom: Custom name. optional.
type: Response type (json|xml). optional, default: json.
private: Set url to private (not listed). optional
password: Set url password. optional (max 10 chars)
uses: Number of uses for the url. optional
expire: date in format MM/DD/YYYY to expire url. optional
via: Adds a signature to track your application. optional
Example:

http://ulvis.net/API/write/get?url=http://youtube.com&custom=mycustomname&private=1&type=xml

XML Response example:

    <response>
        <success>1</success>
            <data>
                <id>mycustomname</id>
                <url>http://ulvis.net/mycustomname</url>
                <full>http://youtube.com</full>
                <hits>0</hits>
                <status>custom_new</status>
                <via>api</via>
                <date>1330715001</date>
                <last>1330719941</last>
            </data>
    </response>
        


Read API Endpoints:
GET requests: http://ulvis.net/API/read/get
POST requets: http://ulvis.net/api/read/post
Variables:

You can pass up to three variables to control the response or your application.
id: ID of the url you want to access. required.
password: password for url (if protected). optional.
type: Response type (json|xml). optional, default: json.
Example:

http://ulvis.net/API/read/get?id=P&password=0000&private=1&type=xml

XML Response example:

    <response>
        <success>1</success>
            <data>
                <id>P</id>
                <hits>101</hits>
                <ads>1</ads>
                <hits>0</hits>
                <full>http://google.com</full>
                <created>1334239095</created>
                <last>1334241124</last>
            </data>
    </response>
        
Tags:
success: (true|false) for request success.
data:
id: Unique identifier of url.
url: Shortened url.
full: Full url before shortened.
uses: Clicks left to inactivate url.
hits: Number of hits to the link.
ads: Indicate if url use ads.
date: Timestamp where the url was make.
last: Timestamp for the las click.
last: Timestamp to inactivate link.


XML Error example:

    <response>
        <success>0</success>
            <error>
                <code>0</code>
                <msg>domain not allowed</msg>
            </error>
    </response>
        


Tags:
success: (true|false) for request success.
error:
code: Error code: 0, 1 and 2.
url: Error msg.
