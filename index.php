<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <title>Simple PHP Example</title>

        <link rel="stylesheet" type="text/css" href="newcss.css" />
        <style type="text/css">
            body {
                background-color: #aaa;
                margin: 0;
                padding: 0;

            }
            div {
                width: 815px;
                margin: 5em auto;
                padding: 10px;
                background-color: #f0f0f2;
                border-radius: 1em;
                box-shadow: 1px 1px 1px #00B3E6;
            }
            @media (max-width: 800px) {
                body {
                    background-color: #fff;
                }
                div {
                    width: auto;
                    margin: 0 auto;
                    border-radius: 0;
                    padding: 0px;
                }
            }
        </style>
    </head>
    <body>
        <div class="entry-content">
            <h1>Have a look at these <i>awesome</i> embedded examples!</h1>
            <h2> These are mobile or pc friendly</h2>
            <!-- this is creating an embedded signature request using text tags -->
            <form action="/signatureRequestTextTags.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <input type="submit" value="Text Tags are cool"/>
                    <br />
                    <input type="file" name="uploadedTextTags" id="uploadedTextTags"/>
                    <p>Sign a signature request that uses text tags</p>
                    <p>NOTE - use a text tags pdf with only <b>one</b> signer!</p>
                </fieldset>
            </form>

            <!-- this is a standard sig request with an appended signature page -->
            <form action="/AppendedSignaturePage.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <br />
                    <input type="submit" value="Easy as easy gets"/>
                    <br /> 
                    <input type="file" name="uploadedfile" id="uploadedfile"/>   
                    <p>Sign a signature request that uses an appended signature page</p>
                </fieldset>
            </form>
            
            <!-- this is a standard sig request with an appended signature page which triggers an email -->
            <form action="/AppendedSignaturePage_email.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <br />
                    <input type="submit" value="Easy as easy gets with email"/>
                    <input type="email" name="signeremail" id="signeremail" placeholder="Enter Email Here"/>
                    <br /> 
                    <input type="file" name="uploadedfile" id="uploadedfile"/>
                    <br />
                    <p>Enter your email address to receive a link to the embedded signer page</p>
                </fieldset>
            </form>
            
            <!-- this for embedded signing with form_fields_per_document -->
            <form action="/signatureRequestFormFields.php">
                <fieldset>
                    <br />
                    <input type="submit" value="Embedded Signature With Form Fields"/>
                    <br />
                </fieldset> 
                <p>The document and form fields are hardcoded, but you're welcome to check it out!<br /></p>
            </form>
            
            <!-- this for embedded signing with template -->
            <form action="/signatureRequestWithTemplate.php">
                <fieldset>
                    <br />
                    <input type="submit" value="Embedded Signature With Template"/>
                    <br />
                </fieldset> 
                <p>The template's hardcoded and setup to trigger a specific response<br /></p>
                <p>but you're welcome to check the template out!<br /></p>
            </form>
            
            <h2>These are only pc friendly</h2>
            
            <!-- this is an embedded template page -->
            <form action="/embeddedTemplate.php" method="post" enctype="multipart/form-data">        
                <fieldset>
                    <input type="submit" value="Template Creation"/>
                    <br />
                    <input type="file" name="uploadedTemplateFile" id="uploadedTemplateFile"/>
                    <p>Create a template</p>
                </fieldset>
            </form>
            
            <!-- this is an edit embedded template page -->
            <form action="/editEmbeddedTemplate.php" method="post" enctype="multipart/form-data">        
                <fieldset>
                    <br />
                    <input type="text" name="templateID" id="templateID"/>
                    <br />
                    <input type="submit" value="Edit An Embedded Template"/>
                    <p>Edit an embedded template</p>
                </fieldset>
            </form>

            <!-- this is an embedded requesting page -->
            <form action="/embeddedRequesting.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <br />
                    <input type="submit" value="Requesting"/>
                    <br />
                    <input type="file" name="requestingFile" id="requestingFile"/>
                </fieldset>
                <p>Create a signature request that will send a HelloSign email to the signer(s)</p>
            </form>
            
            <!-- this is an embedded requesting page with embedded signing -->
            <form action="/embeddedRequestingEmbeddedSigning.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <br />
                    <input type="submit" value="Requesting for Embedded Signing"/>
                    <br />
                    <input type="file" name="requestingFileEmbSig" id="requestingFileEmbSig"/>
                </fieldset>            
                <p>Create a signature request that will be used for embedded signing</p>
            </form>

            <!-- this for testing bugs -->
            <form action="/bugstesting.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <br />
                    <input type="submit" value="Bug Testing Only"/>
                    <br />
                    <input type="file" name="BugTestingOnly" id="BugTestingOnly"/>
                </fieldset> 
                <p>Use For Bug Testing Only - setup for bug</p>
            </form>            
        </div>
        <p><br /><br /><small>Thanks for playing!</small></p>
    </body>
</html>