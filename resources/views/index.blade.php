<html>
    <head>
        <title>Drone API Documentation</title>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.9.1/styles/default.min.css">
        <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.9.1/highlight.min.js"></script>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
    </head>
<body>
 <div class="container">
  <h2>Usage</h2>
  <br>



     <span>
        <h5>Register</h5>
        Example POST request to the register route
        <pre>
          <code class="php">
            POST https://drone-app.herokuapp.com/api/v1/register

            Request Body:
            {
                'email'     : 'johndoe',
                'password'  : 'password',
            }
          </code>
        </pre>
     </span>

    <span>
        Upon successful or failed registration, a Json object is return containing the
        status code and response message.

       <pre>
         <code class="php">
            Successful Response Body:
            {
              "status"  : 200,
              "massage" : "Registration Successful"
            }

            Failed Response Body:
            {
              "status"  : 500,
              "massage" : "Registration Failed"
            }
         </code>
       </pre>
    </span>


     <span>
        <h5>Login</h5>
        Example POST request to the login route
        <pre>
          <code class="php">
            POST https://drone-app.herokuapp.com/api/v1/login

            Request Body:
            {
                'email'     : 'johndoe',
                'password'  : 'password',
            }
          </code>
        </pre>
     </span>


    <span>
        Upon successful login, a Json object is return containing the
        status code, the token generated and the success message. A response header containing the 'Authorization'. This token is required, as an 'Authorization' header
        to access all protected routes.

       <pre>
       <code class="php">
          Successful Response Body:
          {
            "status"    : 200,
            "massage"   : "Registration Successful"
            "token"     : "SomeRandomToken"
          }

          Failed Response Body:
          {
            "status"  : 500,
            "massage" : "the appropriate error message"
          }
       </code>
       </pre>
    </span>


    <span>
       <h5>Login</h5>
       Example POST request to the login route
       <pre>
         <code class="php">
           POST https://drone-app.herokuapp.com/api/v1/login

           Request Body:
           {
               'email'     : 'johndoe',
               'password'  : 'password',
           }
         </code>
       </pre>
    </span>

    <span>
     To get all emojis, a GET request should be sent to
     <pre>
         <code class="php">
             https://sweetemoji.herokuapp.com/emojis
         </code>
     </pre>
      This route is not protected and does not need an authorization header.

      Example:
      <pre>
        <code class="php">
            GET https://sweetemoji.herokuapp.com/emojis
        </code>
      </pre>


      <pre>
        <code class="php">
         Response Body:

         [
            {
                'id'            : 1,
                'tag'           : 'smile, face, happy',
                'title'         : 'smile',
                'image'         : 'happyface.png',
            },

            {
                'id'            : 2,
                'tag'           : 'sad, face, cry',
                'title'         : 'sad',
                'image'         : 'sadface.png',
            }
         ]
        </code>
      </pre>
     </span>

     <span>
      To edit an emoji send a  PUT request to
       <pre>
        <code class="php">
            https://sweetemoji.herokuapp.com/emojis/{id}
        </code>
       </pre>

        Example:
        <pre>
         <code class="php">
           PUT https://sweetemoji.herokuapp.com/emojis/1

           Request Body
            {
                'id'            : 1,
                'tag'           : 'smile, face, happy',
                'title'         : 'smile',
                'image'         : 'happyface.png',
            },
         </code>
        </pre>

        All arguments, except the id, are optional.

        <pre>
          <code class="php">
            Response Body:

            {
                'status'  :  200,
                'message' : 'Record modified'
            }
          </code>
        </pre>
      </span>

     <span>
       To delete an Emoji, send a DELETE request to
       <pre>
           <code class="php">
                https://sweetemoji.herokuapp.com/emojis/{id}
           </code>
       </pre>

        Example:
        <pre>
            <code class="php">
            DELETE https://sweetemoji.herokuapp.com/emojis/1

            Request Body:
            {
                'id' : 1
            }
            </code>
        </pre>

        The reponse will be like so:

        <pre>
            <code class="php">
                Response Body:
                {
                    'status'  :  200,
                    'message' : 'Record deleted'
                }
            </code>
        </pre>
        </span>
    </div>
  </body>
</html>
