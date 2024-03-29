<?php
    include('header.php');
    include('sidebar.php');
?>

<main class="page">
        <div class="theme-default-content content__default">
          <h1 id="connect-to-channels"><a href="#connect-to-channels" class="header-anchor">#</a> Connect to Channels
          </h1>
          <p>Later after you set up your bot and create a flow, check <a href="../flow-builder/index.php">how to build
              flow</a> to send your first message.</p>
          <div class="custom-block tip">
            <p class="custom-block-title">Link &amp; Unlink</p>
            <p>After you connect create a bot, when you unlink a bot, all data in a flow is saved includes subflows,
              settings and bot users. You can link the flow to another bot connection but your bot users will be removed
              to avoid conflicts.</p>
          </div>
          <h2 id="omni-bot"><a href="#omni-bot" class="header-anchor">#</a> Omni Bot</h2>
          <p>Omnichannel gives you the ability to create 1 single bot and connect it to all channels supported in
            omnichannel.</p>
          <p>Currently, there are 8 different channels but as we keep adding more you will be able to connect these as
            well.</p>
          <p>So where you first needed 8 chatbots to each connect to their own channel you can now do the same with just
            1 chatbot!</p>
          <p>Unlike separate channels like Facebook, WhatsApp, Telegram and so on, you have 1 omnichannel per workspace.
            This might be subject to change in the future but keep this in mind for now when connecting your channels.
          </p>
          <h3 id="how-to-create-a-chatbot-in-omnichannel"><a href="#how-to-create-a-chatbot-in-omnichannel"
              class="header-anchor">#</a> How to create a chatbot in omnichannel</h3>
          <p>From the left-hand menu press <strong>omnichannel</strong>. You will then have two options to create your
            omnichannel chatbot.</p>
          <p><img src="../assets/img/Create a ChatBot in Omnichannel_240105.png" alt="title"></p>
          <p>1- You can create a completely new chatbot. If you are starting with an empty workspace where you don’t
            have any chatbots yet, this will be the most likely option you will choose.</p>
          <p>2- If you already created a chatbot into a channel and want to use this same chatbot inside of your
            omnichannel, then you can choose the option “Convert Existing Chatbot”. This will also have the big
            advantage of importing the bot users you already have into the omnichannel chatbot.</p>
          <p>Once you have chosen any of your preferred option you will continue to the next step.</p>
          <p>If you selected the <strong>“create new bot”</strong> then you will be taken to the template store where
            you can select any of the available templates, or select the option <strong>“Blank Template”</strong>. This
            option lets you start from scratch and you can build the chatbot to your own liking.</p>
          <p><img src="../assets/img/Select Any template_240105.png" alt="title"></p>
          <p>Once you made your choice you will be taken to the window where you are able to name your chatbot, along
            with adding a description.</p>
          <p><img src="../assets/img/Name the Chatbot_240105.png" alt="title"></p>
          <p>Once you are done press the green button named <strong>“create bot”</strong> and you will be able to
            connect the channels.</p>
          <h3 id="how-to-connect-channels-to-omnichannel"><a href="#how-to-connect-channels-to-omnichannel"
              class="header-anchor">#</a> How to connect channels to omnichannel</h3>
          <p>Once your omnichannel chatbot has been created, head back to the main dashboard to connect the channels you
            like the omnichannel to manage with this chatbot.</p>
          <p><img src="../assets/img/omni-channel-04.b2829783.png" alt="title"></p>
          <p>If you did not connect any channel yet to your workspace then it will take you to that specific channel to
            do so. Once you have added them you will be able to link them to this omnichannel chatbot.</p>
          <p>You can unlink them at any time by pressing the button on the right-hand side.</p>
          <p><img src="../assets/img/Unlink Any channels_240105.png" alt="title"></p>
          <h3 id="how-to-create-an-omnichannel-flow"><a href="#how-to-create-an-omnichannel-flow"
              class="header-anchor">#</a> How to create an omnichannel flow</h3>
          <p>Now that you have created the chatbot and connected your channels you are ready to create your chatbot.</p>
          <p>Now every single feature inside the flow builder will be available to you but do note that certain channels
            may not be able to use them.</p>
          <h3 id="use-conditions-to-determine-where-the-user-is-coming-from"><a
              href="#use-conditions-to-determine-where-the-user-is-coming-from" class="header-anchor">#</a> Use
            conditions to determine where the user is coming from</h3>
          <p>We have a condition you can use to determine which channel a user is coming from.</p>
          <p>Just go to creating a condition, then select the <strong>“channel”</strong> option.</p>
          <p><img src="../assets/img/omni-channel-06.d52c27d8.png" alt="title"></p>
          <p>Once selected you will be able to choose from the available channels in omnichannel.</p>
          <p><img
              src="data:image/png;base64,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"
              alt="title"></p>
          <p>Once you set up this condition you can direct the user to specific channel features.</p>
          <p>For example cards might be available to Messenger but not to Telegram. It does not show the same way.</p>
          <p>So using this condition you can send a customized response for Telegram users.</p>
          <h3 id="how-to-determine-which-channels-support-which-features"><a
              href="#how-to-determine-which-channels-support-which-features" class="header-anchor">#</a> How to
            determine which channels support which features?</h3>
          <p>Every block when hovering over it will show the available channels by displaying the icons of those
            channels at the top. See this demo video about <a href="https://youtu.be/FjItBsaqf2c" target="_blank"
              rel="noopener noreferrer">how to check feature availability<span><svg xmlns="http://www.w3.org/2000/svg"
                  aria-hidden="true" focusable="false" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15"
                  class="icon outbound">
                  <path fill="currentColor"
                    d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                  </path>
                  <polygon fill="currentColor"
                    points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                  </polygon>
                </svg> <span class="sr-only">(opens new window)</span></span></a>.</p>
          <p>You can also reference the same icons when inserting a node into the flow builder</p>
          <p><img src="../assets/img/omni-channel-08.28b72eb0.png" alt="title"></p>
          <h2 id="facebook-bot"><a href="#facebook-bot" class="header-anchor">#</a> Facebook Bot</h2>
          <p><img src="../assets/img/fb_connect.13bd8a24.png" alt="fb_connect"></p>
          <p>Follow steps 1, 2 and 3 in the above screenshot and jump to facebook.com, <strong>select all the pages in
              your page list, that you want Smart ChatBot to help with the automation</strong>.</p>
          <p><img src="../assets/img/pagesusewith.png" alt="fb_connect"></p>
          <div class="custom-block danger">
            <p class="custom-block-title">IMPORTANT</p>
            <p>If you connect your Facebook Account with more than one workspace, remember to select all pages that
              require management on Smart ChatBot regardless of workspace.</p>
          </div>
          <p><img src="../assets/img/connectfacebook.png" alt="fb_connect"></p>
          <p>After connection, these are some of the operations in the screenshot above:</p>
          <ol>
            <li>Click &quot;Reconnect&quot; when you want to add/remove a page or refresh.</li>
            <li>Click &quot;Create Flow&quot; to create a new flow for the bot.</li>
            <li>Click &quot;Open Flow&quot; to enter the flow.</li>
            <li>Click the red x to remove the connection between the bot and your page.</li>
            <li>Flip the status to stop/start the automation.</li>
            <li>Click the link to talk to the bot. You can also share the link with other Facebook users.</li>
          </ol>
          <div class="custom-block tip">
            <p class="custom-block-title">Please note that</p>
            <p>the red x is for disconnecting the flow with your page only. Your flow won't be removed. It will still
              stay in your workspace remain intact (in &quot;All Bots&quot;).</p>
          </div>
          <h3 id="talk-to-facebook-bot"><a href="#talk-to-facebook-bot" class="header-anchor">#</a> Talk to Facebook Bot
          </h3>
          <p>3 ways:</p>
          <ol>
            <li>Click on URL in step 6 in the above screenshot.</li>
            <li>Use the preview button in your flow.</li>
            <li>Search your page name on Facebook to visit your page and click <strong>Send Message</strong> or
              <strong>Message</strong>.</li>
          </ol>
          <h2 id="instagram-bot"><a href="#instagram-bot" class="header-anchor">#</a> Instagram Bot</h2>
          <p>Firstly, you need an Instagram business account. To change from personal account to business account,
            follow steps 1, 2 and 3 in the following screenshot and choose &quot;Business&quot;:</p>
          <p><img src="../assets/img/ins1.8d77655e.png" alt="ins"></p>
          <p>Then connect your Instagram business account with your Facebook page. A Facebook page is a must, if you
            don't have one, create a new page.</p>
          <p><img src="../assets/img/managepage.png" alt="ins"></p>
          <p>Go to the &quot;Settings&quot; of your Facebook page, then &quot;Instagram&quot;, &quot;Connect
            Account&quot;.</p>
          <p><img src="../assets/img/connectinstagram.png" alt="ins"></p>
          <p>The next step is to turn on the &quot;Allow access to messages&quot; in your Instagram app, see steps 1 to
            5 in the following screenshot: Menu - Settings - Privacy - Messages - Allow access to messages</p>
          <p><img src="../assets/img/ins4.ddcb0ea7.png" alt="ins"></p>
          <p>Finally, in Smart ChatBot, let's connect your Instagram with Smart ChatBot. Go &quot;Facebook&quot; and
            &quot;Reconnect&quot; (Yes, Facebook, not Instagram):</p>
          <p><img src="../assets/img/connectfacebook2.png" alt="ins"></p>
          <p><img src="../assets/img/editsetting.png" alt="ins"></p>
          <p>Continue as yourself or click &quot;Edit Settings&quot; if you've previously linked Smart ChatBot to your Facebook.
          </p>
          <p><img src="../assets/img/instagrambusiness.png" alt="ins"></p>
          <div class="custom-block danger">
            <p class="custom-block-title">IMPORTANT</p>
            <p>In the above screenshot, select ALL the Instagram Business Accounts that you wanted to use with Smart ChatBot,
              not just for the current workspace.</p>
          </div>
          <p><img src="../assets/img/pagesusewith2.png" alt="ins"></p>
          <div class="custom-block danger">
            <p class="custom-block-title">IMPORTANT</p>
            <p>Similarly, in the above screenshot, select ALL the Facebook pages that you wanted to use with Smart ChatBot, not
              just the page that connects to the Instagram account.</p>
          </div>
          <p>Give all permissions and after the connection, you are able to see your Instagram flow in both
            &quot;Facebook&quot; and &quot;Instagram&quot;:</p>
          <p><img src="../assets/img/connectfb3.png" alt="ins"></p>
          <p><img src="../assets/img/instagrambots.png" alt="ins"></p>
          <h3 id="talk-to-instagram-bot"><a href="#talk-to-instagram-bot" class="header-anchor">#</a> Talk to Instagram
            Bot</h3>
          <p>Instagram doesn't support <strong>Preview</strong> feature, so to talk to your Instagram bot:</p>
          <ol>
            <li>Search your account name on Instagram or goto the <strong>Instagram</strong> section on Smart ChatBot dashboard,
              click on the URL link below the bot name to visit your Instagram page</li>
            <li>follow the account and click <strong>Message</strong> to start the conversation.</li>
          </ol>
          <p><img src="../assets/img/brixautomate.png" alt="ins"></p>
          <h2 id="telegram-bot"><a href="#telegram-bot" class="header-anchor">#</a> Telegram Bot</h2>
          <p>On your phone, visit <a href="https://t.me/BotFather" target="_blank"
              rel="noopener noreferrer">https://t.me/BotFather<span><svg xmlns="http://www.w3.org/2000/svg"
                  aria-hidden="true" focusable="false" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15"
                  class="icon outbound">
                  <path fill="currentColor"
                    d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                  </path>
                  <polygon fill="currentColor"
                    points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                  </polygon>
                </svg> <span class="sr-only">(opens new window)</span></span></a> from a browser. Click &quot;SEND
            MESSAGE&quot; and you will jump to the Telegram application. Click &quot;Start&quot; at the bottom to talk
            to @BotFather.</p>
          <p><img src="../assets/img/telegram2.637d8323.png" alt="telegram"></p>
          <p>Send &quot;/newbot&quot;, then a username for your bot. You will get a token like this:</p>
          <p><img src="../assets/img/telegram3.a72868c9.png" alt="telegram"></p>
          <p>Copy the token and back to Smart ChatBot.</p>
          <p><img src="../assets/img/telegram1.be164dc0.png" alt="telegram"></p>
          <p>In Smart ChatBot, click &quot;Add New Telegram Bot&quot; and put your token in the pop-up window. Finally, click
            &quot;Create Flow&quot; and there you go!</p>
          <p><img src="../assets/img/telegrambot.png" alt="telegram"></p>
          <p>Flip the status to stop/start the automation and click the red x to remove the connection (your flow will
            be still in &quot;All Bots&quot;)</p>
          <h3 id="talk-to-telegram-bot"><a href="#talk-to-telegram-bot" class="header-anchor">#</a> Talk to Telegram Bot
          </h3>
          <p>2 ways:</p>
          <p><img src="../assets/img/botfather.png" alt="telegram"></p>
          <ol>
            <li>Click the URL link above.</li>
            <li>Use the preview button in your flow.</li>
          </ol>
          <h2 id="slack-bot"><a href="#slack-bot" class="header-anchor">#</a> Slack Bot</h2>
          <p>For now, Smart ChatBot is able to send various types of messages to your Slack group or contacts mainly for
            notification purposes.</p>
          <div class="custom-block warning">
            <p class="custom-block-title">In Progress ...</p>
            <p>We are working on building more functions for Slack bots. The documentation would be updated as soon as
              we have done that. Should you have any query, please feel free to contact us via the Smart ChatBot support bot in
              the bottom right corner on <a href="https://brixbull.ai/" target="_blank"
                rel="noopener noreferrer">brixbull.ai<span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                    focusable="false" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15"
                    class="icon outbound">
                    <path fill="currentColor"
                      d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                    </path>
                    <polygon fill="currentColor"
                      points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                    </polygon>
                  </svg> <span class="sr-only">(opens new window)</span></span></a>.</p>
          </div>
          <h2 id="wechat-bot"><a href="#wechat-bot" class="header-anchor">#</a> WeChat Bot</h2>
          <p><img src="../assets/img/wechatbot.png" alt="wechat"></p>
          <p>Follow steps 1, 2 and 3 in the above screenshot.</p>
          <p><img src="../assets/img/wechat2.55bb42e3.png" alt="wechat"></p>
          <ul>
            <li>If you already have a WeChat official account or wanted to register one, click &quot;Sign up&quot;</li>
            <li>If you don't have an official account yet, click &quot;Sandbox Test account&quot; to test the bot with
              your WeChat personal account</li>
          </ul>
          <div class="custom-block tip">
            <p class="custom-block-title">TIP</p>
            <p>You can choose English on the WeChat website by clicking the globe icon on the upper right side. However,
              some pages do not support translation.</p>
          </div>
          <p>Login yourself with your WeChat account. On the top, you can see your &quot;appID&quot; and
            &quot;appsecret&quot; as below:</p>
          <p><img src="../assets/img/wechat3.0fbb83bd.png" alt="wechat"></p>
          <p>Copy them back to Smart ChatBot. Follow the steps below:</p>
          <p><img src="../assets/img/sandbox.png" alt="wechat"></p>
          <ol>
            <li>choose a type</li>
            <li>paste your App ID and secret</li>
            <li>name a token yourself</li>
            <li>click &quot;Save&quot;</li>
            <li>a webhook URL will show, copy it to the WeChat's website</li>
          </ol>
          <p><img src="../assets/img/wechat5.png" alt="wechat"></p>
          <p>Paste the webhook URL (in step 5) and the token (in step 3) here then click the green &quot;Submit&quot;
            button. Finally, scroll down a bit, you can see your testing QR code:</p>
          <p><img src="../assets/img/wechat6.0731c54a.png" alt="wechat"></p>
          <h3 id="talk-to-wechat-bot"><a href="#talk-to-wechat-bot" class="header-anchor">#</a> Talk to WeChat Bot</h3>
          <p>Now you can share your QR code with any WeChat user. By scanning and following your official/testing
            account, they are able to talk to your bot. Besides, their nickname and WeChatID will be listed here (100
            users maximum).</p>
          <h2 id="whatsapp-sms-voice-bot"><a href="#whatsapp-sms-voice-bot" class="header-anchor">#</a> WhatsApp, SMS
            &amp; Voice Bot</h2>
          <h3 id="pick-providers"><a href="#pick-providers" class="header-anchor">#</a> Pick Providers</h3>
          <p>As follow are the providers we currently work with. Different providers support different bots. Choose your
            provider according to your needs. Create an account with them and pick your number.</p>
          <p><img src="../assets/img/providers_config.77776646.png" alt="phone number providers"></p>
          <p><img src="../assets/img/whatsappbot.png" alt="provider"></p>
          <p>Smart ChatBot has put links for you to jump to their official websites. You can either access them in the according
            channel (see screenshot above) or on the &quot;Integration&quot; page (see screenshot below).</p>
          <p><img src="../assets/img/Twillo.png" alt="provider"></p>
          <p>Follow the steps in the above screenshots to connect to the provider and add numbers.</p>
          <h3 id="sign-up-get-numbers"><a href="#sign-up-get-numbers" class="header-anchor">#</a> Sign Up &amp; Get
            Numbers</h3>
          <p>Take Twilio as an example. On their website, sign up, login in, then you will get to your dashboard:</p>
          <p><img src="../assets/img/twilio.4f0f2af5.png" alt="twilio"></p>
          <p>Click &quot;Get a Trail Number&quot;.</p>
          <p><img src="../assets/img/twilio_number.451644d9.png" alt="twilio number"></p>
          <p>In the pop-up window, the number is shown on the upper left side, click &quot;Choose this Number&quot; or
            &quot;Search for a different number&quot;. Then you have your own number!</p>
          <h3 id="connect-to-provider"><a href="#connect-to-provider" class="header-anchor">#</a> Connect to Provider
          </h3>
          <p><img src="../assets/img/twilio_id.8c5b0890.png" alt="twilio id"></p>
          <p>In your provider dashboard, click the little button on the right side to copy your &quot;ACCOUNT SID&quot;
            and &quot;AUTH TOKEN&quot; value back to Smart ChatBot:</p>
          <p><img src="../assets/img/twilio_id_uchat.5c6f0b0c.png" alt="twilio id in UChat"></p>
          <ol>
            <li>put your copied values in corresponding fields.</li>
            <li>click &quot;Save&quot;.</li>
            <li>click &quot;Add Phone Number&quot; if you are building an SMS or Voice bot, otherwise, &quot;Add
              WhatsApp Number&quot;.</li>
          </ol>
          <ul>
            <li>More information click -&gt; <a href="https://www.twilio.com/docs" target="_blank"
                rel="noopener noreferrer">Twilio Docs<span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                    focusable="false" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15"
                    class="icon outbound">
                    <path fill="currentColor"
                      d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                    </path>
                    <polygon fill="currentColor"
                      points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                    </polygon>
                  </svg> <span class="sr-only">(opens new window)</span></span></a></li>
            <li>More information click -&gt; <a href="https://docs.360dialog.com/" target="_blank"
                rel="noopener noreferrer">360Dialog Docs<span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                    focusable="false" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15"
                    class="icon outbound">
                    <path fill="currentColor"
                      d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                    </path>
                    <polygon fill="currentColor"
                      points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                    </polygon>
                  </svg> <span class="sr-only">(opens new window)</span></span></a></li>
            <li>More information click -&gt; <a
                href="https://docs.signalwire.com/topics/relay/#relay-documentation-access-keys-tokens" target="_blank"
                rel="noopener noreferrer">SignalWire Docs<span><svg xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" focusable="false" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15"
                    class="icon outbound">
                    <path fill="currentColor"
                      d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                    </path>
                    <polygon fill="currentColor"
                      points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                    </polygon>
                  </svg> <span class="sr-only">(opens new window)</span></span></a></li>
            <li>More information click -&gt; <a href="https://developers.messagemedia.com/" target="_blank"
                rel="noopener noreferrer">Message Media Docs<span><svg xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" focusable="false" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15"
                    class="icon outbound">
                    <path fill="currentColor"
                      d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                    </path>
                    <polygon fill="currentColor"
                      points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                    </polygon>
                  </svg> <span class="sr-only">(opens new window)</span></span></a></li>
          </ul>
          <h3 id="add-numbers"><a href="#add-numbers" class="header-anchor">#</a> Add Numbers</h3>
          <p>Click &quot;Add Number&quot; in area 3 in the above picture after connecting your provider with Smart ChatBot.</p>
          <p><img
              src="data:image/png;base64,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"
              alt="twilio find number"></p>
          <p>Click &quot;Find Number&quot;, the system will search all the numbers that are under your provider account.
            Click &quot;Add&quot; to add one of the numbers.</p>
          <p>Thereafter, you are able to see all your connected numbers under the &quot;Phone Numbers&quot; page in
            &quot;Integration&quot;.</p>
          <p><img src="../assets/img/phone_number.57307436.png" alt="twilio find number"></p>
          <p>Add new numbers from the drop-down list as below: (&quot;Buy Number&quot; is disabled at the moment)</p>
          <p><img src="../assets/img/add_number.461ef7f1.png" alt="add number"></p>
          <div class="custom-block tip">
            <p class="custom-block-title">TIP</p>
            <p>If you would like to disconnect the WhatsApp / Voice / SMS flow with your number, or create a new flow
              for that number, copy the number and click &quot;Release Number&quot;. Then your flow will be disconnected
              but stay safe in your &quot;All Bots&quot;. Add the number again to create a new flow with it.</p>
          </div>
          <p>After adding phone numbers:</p>
          <p><img src="../assets/img/phone.8a3d1984.png" alt="phone number"></p>
          <ol>
            <li>use the plus button to create new a flow.</li>
            <li>button 2 is for &quot;Open Flow&quot; of this phone number.</li>
          </ol>
          <h3 id="talk-to-whatsapp-sms-voice-bot"><a href="#talk-to-whatsapp-sms-voice-bot" class="header-anchor">#</a>
            Talk to WhatsApp/SMS/Voice Bot</h3>
          <ul>
            <li>WhatsApp - add the phone number as a new contact and send messages to it</li>
            <li>Voice - call the phone number</li>
            <li>SMS - send SMS messages to the phone number</li>
          </ul>
          <h2 id="whatsapp-360dialog-sandbox"><a href="#whatsapp-360dialog-sandbox" class="header-anchor">#</a> WhatsApp
            + 360Dialog Sandbox</h2>
          <p><img src="../assets/img/360dialog.png" alt="provider"></p>
          <p>Go &quot;Bots&quot; -&gt; &quot;WhatsApp&quot; then &quot;360Dialog&quot; on Smart ChatBot and in your WhatsApp
            App, add &quot;+4930609859535&quot; as a new contact and sent &quot;START&quot; to it.</p>
          <p><img src="../assets/img/3601.c5252c8f.png" alt="360"></p>
          <p>Copy the &quot;api-key&quot; back to Smart ChatBot, click &quot;Add WhatsApp Number&quot;:</p>
          <p><img src="../assets/img/3602.e0058c20.png" alt="360"></p>
          <p>Again put the number &quot;+4930609859535&quot; here and paste the API key. After adding this number you
            can click the &quot;Create Bot&quot; to start building a flow.</p>
          <h3 id="to-use-360dialog-sandbox-please-note-that"><a href="#to-use-360dialog-sandbox-please-note-that"
              class="header-anchor">#</a> To use 360Dialog sandbox, please note that:</h3>
          <ol>
            <li>only the phone number which requests the API key can test the bot</li>
            <li>you can send &quot;START&quot; to get a new code, but make sure you update the key with your bot.</li>
            <li>360Dialog doesn't allow sandbox users to access their media recourses. For example, if you use a
              question step to ask for a photo and store the URL in a text variable. You are unable to visit this URL to
              get the photo because you are using a sandbox.</li>
          </ol>
          <h3 id="to-use-360dialog-with-a-50-month-plan"><a href="#to-use-360dialog-with-a-50-month-plan"
              class="header-anchor">#</a> To use 360Dialog with a $50/month plan</h3>
          <p>After testing the sandbox, to grab the US$5/month plan, check doc <a href="whatsapp-api.php">here</a>.</p>
          <h2 id="google-my-business"><a href="#google-my-business" class="header-anchor">#</a> Google My Business</h2>
          <p>The whole process will be:</p>
          <ol>
            <li>connect Google account</li>
            <li>create agent, build flow &amp; test</li>
            <li>verify agent</li>
            <li>launch chatbot</li>
            <li>go live</li>
          </ol>
          <h3 id="connect-google-account"><a href="#connect-google-account" class="header-anchor">#</a> Connect Google
            Account</h3>
          <p><img src="../assets/img/googlebusiness.png" alt="google"></p>
          <p>Follow steps 1, 2 and 3 to connect to your Google account.</p>
          <div class="custom-block warning">
            <p class="custom-block-title">Note</p>
            <p>Please note that this Google account must have access to the business (either owner or manager). For
              agency, you will need to be invited to be the manager of your client's business.</p>
          </div>
          <p><img src="../assets/img/gmb1.c97f6b42.png" alt="google"></p>
          <p>After the connection, in the above screenshot:</p>
          <ol>
            <li>click &quot;Sync Locations&quot; to pull all the businesses that associate with this Google account,
              whether they are verified or not.</li>
            <li>create agent then create flow</li>
            <li>scan the QR code or visit the URL link to test the bot in Google Map</li>
          </ol>
          <h3 id="create-agent"><a href="#create-agent" class="header-anchor">#</a> Create Agent</h3>
          <p>Click &quot;Create Agent&quot;, fill in the profile information including:</p>
          <p><img src="../assets/img/gmb2.367690d4.png" alt="google"></p>
          <ol>
            <li>phone number</li>
            <li>website address (same as your business website address)</li>
            <li>privacy policy URL</li>
            <li>timezone</li>
            <li>logo</li>
            <li>entry points (local, non-local, both local and non-local)</li>
            <li>welcome message</li>
            <li>offline message</li>
          </ol>
          <div class="custom-block tip">
            <p class="custom-block-title">TIP</p>
            <p>If you get an error saying that fails to create an agent because the location is not verified, try to
              click cancel and refresh the page. The &quot;Create Flow&quot; button will show.</p>
          </div>
          <h3 id="local-or-non-local"><a href="#local-or-non-local" class="header-anchor">#</a> Local or Non-Local</h3>
          <table>
            <thead>
              <tr>
                <th style="text-align:center;">Type</th>
                <th style="text-align:center;">Agent Verification Process</th>
                <th style="text-align:center;">Entry Points</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="text-align:center;">Local</td>
                <td style="text-align:center;">Automatically</td>
                <td style="text-align:center;">Google search &amp; Google map</td>
              </tr>
              <tr>
                <td style="text-align:center;">Non-Local</td>
                <td style="text-align:center;">Manual Process</td>
                <td style="text-align:center;">Google search, Google map, site links, answer card, website buttons etc
                </td>
              </tr>
            </tbody>
          </table>
          <h3 id="build-flow-test-the-bot"><a href="#build-flow-test-the-bot" class="header-anchor">#</a> Build Flow
            &amp; Test the Bot</h3>
          <p>When your agent is created, click &quot;Create Flow&quot; to start building your bot. Check &quot;Flow
            Builder&quot; documentation for how-tos.</p>
          <h3 id="verify-agent"><a href="#verify-agent" class="header-anchor">#</a> Verify Agent</h3>
          <div class="custom-block danger">
            <p class="custom-block-title">IMPORTANT</p>
            <p>Build and test everything before you request an agent verification. Because once verified, it's very
              difficult to change the agent information. You will need to contact Google yourself.</p>
          </div>
          <p>Before you send the request, check this:</p>
          <ol>
            <li>Did I choose what suit my business best, local or non-local?</li>
            <li>Am I happy with all agent information like logo, contact phone, etc?</li>
            <li>Do I have a contact email that shares the same domain as my website?</li>
          </ol>
          <p><img
              src="data:image/png;base64,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"
              alt="google"></p>
          <p>Click the button next to the &quot;Open Flow&quot; button, then click &quot;Verify Agent&quot;.</p>
          <p><img src="../assets/img/gmb4.0af533af.png" alt="google"></p>
          <p>Provide a business website, contact person name and a contact email that share the same domain as the brand
            website.</p>
          <p>For a local business, if your business is already a verified business, your agent can be verified
            automatically and immediately. You will see the green &quot;Verified&quot; label. Thereafter, you can launch
            your chatbot.</p>
          <p><img src="../assets/img/localauto.png" alt="google"></p>
          <p>While for a non-local business, after submitting the request, you will receive 2 emails from Google. One
            email asks you to reply for approving Smart ChatBot to help with the bot automation in a specified format (security
            key needed). Another email will give you the security key. It will take you a few days (up to 7 days) to get
            your agent verified.</p>
          <h3 id="launch-agent"><a href="#launch-agent" class="header-anchor">#</a> Launch Agent</h3>
          <p><img src="../assets/img/gmb6.607470c8.png" alt="google"></p>
          <p>When your agent gets verified, click &quot;Launch Agent&quot; and a chat button will show with your
            business after 4-6 hours. You will see the green &quot;Launched&quot; label.</p>
          <h3 id="unlaunch-agent"><a href="#unlaunch-agent" class="header-anchor">#</a> Unlaunch Agent</h3>
          <p>If you wanted to stop the bot automation, click the green &quot;Active&quot; button under status. And to
            stop showing the bot with your business, you need to unlaunch your agent.</p>
          <p><img src="../assets/img/gmb7.c90804ca.png" alt="google"></p>
          <p>Click &quot;Unlaunch Agent&quot; and again, you will need to wait for 4-6 hours to see the &quot;Chat&quot;
            button disappear. By then the labels will look like this:</p>
          <p><img src="../assets/img/gmb8.f4b2961e.png" alt="google"></p>
          <p>To launch it again, just click on &quot;Launch Agent&quot; again.</p>
          <h3 id="talk-to-google-bot"><a href="#talk-to-google-bot" class="header-anchor">#</a> Talk to Google Bot</h3>
          <p>Before you launch your bot, goto *<em>Google</em> section on your Smart ChatBot dashboard. Visit the <strong>Test
              Url</strong> or scan the QR code to talk to the bot.</p>
          <p>After your bot launched, Google your business name in a webpage. Click on the <strong>CHAT</strong> button
            to start the conversation:</p>
          <p><img src="../assets/img/google.com.png" alt="google"></p>
          <p>Or search your business name in Google Map. Click on the <strong>Message</strong> button to start the
            conversation:</p>
          <p><img src="../assets/img/googlemap.png" alt="google"></p>
          <h2 id="vk-bot"><a href="#vk-bot" class="header-anchor">#</a> VK Bot</h2>
          <p>The whole process will be:</p>
          <ol>
            <li>create community, get group id and access token</li>
            <li>enable community messages and bot abilities</li>
          </ol>
          <h3 id="get-group-id-and-access-token"><a href="#get-group-id-and-access-token" class="header-anchor">#</a>
            Get Group ID and Access Token</h3>
          <p>You need to have a VK personal account first, go to <a href="https://vk.com/" target="_blank"
              rel="noopener noreferrer">https://vk.com<span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                  focusable="false" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15" class="icon outbound">
                  <path fill="currentColor"
                    d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z">
                  </path>
                  <polygon fill="currentColor"
                    points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9">
                  </polygon>
                </svg> <span class="sr-only">(opens new window)</span></span></a>, register and login yourself.</p>
          <p><img src="../assets/img/vkbot.png" alt="vk"></p>
          <p>Go to &quot;Community&quot; from the left sidebar and &quot;Create Community&quot; for your chatbot.</p>
          <p><img src="../assets/img/vkbot2.png" alt="vk"></p>
          <p>You will find your group id in the URL (see above screenshot). Click on &quot;API usage&quot;, let's create
            an access token.</p>
          <p><img src="../assets/img/vk3.ef438549.png" alt="vk"></p>
          <p>Click on &quot;Create token&quot;, Smart ChatBot only need to access your community management and messages. Tick
            the options and hit &quot;Create&quot;.</p>
          <div class="custom-block tip">
            <p class="custom-block-title">TIP</p>
            <p>You will need to download the VK application on your phone because VK will send you notifications for
              confirming some actions of the community.</p>
          </div>
          <p>Copy your token and group id and now let's go back to Smart ChatBot.</p>
          <p><img src="../assets/img/vk4.8bff25d4.png" alt="vk"></p>
          <p>Go to VK channel, click &quot;Add New Bot&quot; and fill in your group id and access token, hit
            &quot;Add&quot;.</p>
          <p>Forgot your group id? You can find the community information page here:</p>
          <p><img src="../assets/img/vkbot3.png" alt="vk"></p>
          <p>After the connection, your page looks like this:</p>
          <p><img src="../assets/img/vkbot4.png" alt="vk"></p>
          <p>Click &quot;Create Bot&quot;, select a template and done.</p>
          <p><img src="../assets/img/vkbot5.png" alt="vk"></p>
          <p>Add a simple greeting message for testing.</p>
          <h3 id="enable-community-messages-and-bot-abilities"><a href="#enable-community-messages-and-bot-abilities"
              class="header-anchor">#</a> Enable Community Messages and Bot Abilities</h3>
          <p><img src="../assets/img/vkbot6.png" alt="vk"></p>
          <p>To talk to your bot, you need to enable community messages first. Follow steps 1 to 4 in the above
            screenshot to do so.</p>
          <p><img src="../assets/img/vkbot7.png" alt="vk"></p>
          <p>Then go to &quot;Bot settings&quot;, change the bot abilities to be &quot;Enabled&quot; and make sure you
            hit the &quot;Save&quot; button and see the green &quot;Changes saved&quot; prompted. It's important to
            enable bot abilities so that your bot can send buttons, questions and cards instead of just text messages
            and media.</p>
          <h3 id="talk-to-vk-bot"><a href="#talk-to-vk-bot" class="header-anchor">#</a> Talk to Vk Bot</h3>
          <p>Now you can open your VK application on phone, search your community name and click on it:</p>
          <p><img src="../assets/img/vkbot8.png" alt="vk"></p>
          <p>Click on &quot;Message&quot; to start the conversation.</p>
          <p><img src="../assets/img/vkbot9.png" alt="vk"></p>
          <h3 id="vk-limitation"><a href="#vk-limitation" class="header-anchor">#</a> VK Limitation</h3>
          <p>There are several limitations on VK channel according to their API:</p>
          <ol>
            <li>in a card, the image should have a 13/8 ratio and there should be at least one button otherwise the card
              won't show.</li>
            <li>in a question step, there are 5 quick answers at most.</li>
            <li>in a file question, the file uploaded by the user is sent to VK and VK return an URL pointing to the
              file back to Smart ChatBot. Please note that this URL isn't a direct file link. Therefore you cannot send a file
              type message based on this URL. You can print the URL instead and by clicking this URL, users can access
              the file.</li>
          </ol>
          <h2 id="intercom-bot"><a href="#intercom-bot" class="header-anchor">#</a> Intercom Bot</h2>
          <p>Intercom is a popular live chat platform, Smart ChatBot integration with Intercom will help reduce 80% of the
            support through chatbot automation &amp; A.I.</p>
          <h3 id="key-benefits"><a href="#key-benefits" class="header-anchor">#</a> Key Benefits</h3>
          <p>Solve the customer's support issues in the chatbot automation and Google Artificial intelligence before
            they hit your support team.</p>
          <h4 id="no-coding-knowledge-required"><a href="#no-coding-knowledge-required" class="header-anchor">#</a> No
            Coding Knowledge Required</h4>
          <p>You don’t need to be a developer or learn coding to use Smart ChatBot. With our drag &amp; drop flow builder, you
            can easily build out your automation logic.</p>
          <h4 id="_11-channels-supported-increasing"><a href="#_11-channels-supported-increasing"
              class="header-anchor">#</a> 11+ channels supported &amp; increasing</h4>
          <p>Currently, Smart ChatBot connects your intercom with your customers from Instagram, Messenger, WhatsApp, Google
            Business Messenger, Telegram, Viber, Line, SMS, Voice, Slack, Wechat, and more channels are added to the
            platform. Reach your customer through automation &amp; live chat wherever they are.</p>
          <h3 id="omnichannel-flow-builder"><a href="#omnichannel-flow-builder" class="header-anchor">#</a> Omnichannel
            flow builder</h3>
          <p>With our omnichannel flow builder, you can build your automation logic once, and apply it to all the social
            channels we support(Instagram, Messenger, WhatsApp, Google Business Messenger, Telegram, WeChat, Line,
            Viber)</p>
          <h4 id="artificial-intelligence"><a href="#artificial-intelligence" class="header-anchor">#</a> Artificial
            Intelligence</h4>
          <p>Recognize customer intent using Google Dialogflow, and redirect them to your chatbot automation. Only
            transfer the unrecognized intent to your live chat support. It will save you huge time on your live chat
            support.</p>
          <h4 id="integration-with-3rd-party"><a href="#integration-with-3rd-party" class="header-anchor">#</a>
            Integration with 3rd party</h4>
          <p>Smart ChatBot has built-in integration with Stripe, Paypal, Cloudinary, Shopify, Woocommerce, Calendly, Slack,
            Google Sheet, Twilio, SingalWire, message Media, Gmail, Sendgrid, Mailchimp, ActiveCampaign, Zapier,
            Integromat &amp; Pabbly Connect. You can easily sync the leads &amp; sales into your own CRM or Project
            management tools.</p>
          <h3 id="connect-to-intercom"><a href="#connect-to-intercom" class="header-anchor">#</a> Connect to Intercom
          </h3>
          <h4 id="step-1-connect-with-your-intercom-account"><a href="#step-1-connect-with-your-intercom-account"
              class="header-anchor">#</a> Step 1: Connect with your Intercom account</h4>
          <p><img src="../assets/img/intercom-01.77fd3abb.png" alt="title"></p>
          <p>In this step, you will need to connect with your intercom account inside of Smart ChatBot. After you log in Smart ChatBot,
            you need to go to integration, and then go to Intercom, click the connect intercom account button.</p>
          <h4 id="step-2-authorize-intercom-account"><a href="#step-2-authorize-intercom-account"
              class="header-anchor">#</a> Step 2: Authorize intercom account</h4>
          <p><img src="../assets/img/intercom1.png" alt="title"></p>
          <p>After you click connect intercom button, it will redirect you to log in to your intercom account and then
            you will see the screenshot above, click “Authorize access” and then you just added this app to your
            workspace.</p>
          <p>After authorization, it will show up as below.</p>
          <p><img src="../assets/img/intercom-03.5c4c535e.png" alt="title"></p>
          <p>You can disconnect the app, by clicking the button to disconnect Intercom with this workspace.</p>
          <h4 id="step-3-switch-livechat-to-intercom"><a href="#step-3-switch-livechat-to-intercom"
              class="header-anchor">#</a> Step 3: Switch livechat to intercom</h4>
          <p><img src="../assets/img/intercom2.png" alt="title"></p>
          <p>After you integrate with the intercom, you now need to create an omnichannel chatbot inside of Smart ChatBot. You
            might need to link the channels we currently support(Facebook messenger, Instagram, WhatsApp, Google
            Business Messenger, WeChat, Line, Viber, Telegram).</p>
          <p>After you linked the channel, you can open the bot, then go to the settings of the omnichannel, and select
            intercom from the live chat integration.</p>
          <p><img src="../assets/img/intercom-05.c62e767b.png" alt="title"></p>
          <h3 id="use-intercom"><a href="#use-intercom" class="header-anchor">#</a> Use Intercom</h3>
          <h4 id="step-1-trigger-talk-to-human-pause-automation-anywhere-in-the-flow"><a
              href="#step-1-trigger-talk-to-human-pause-automation-anywhere-in-the-flow" class="header-anchor">#</a>
            Step 1: Trigger “Talk to Human/Pause automation” anywhere in the flow</h4>
          <p><img src="../assets/img/intercom-06.5995627e.png" alt="title"></p>
          <p>The benefits of using Smart ChatBot with intercom is that, your business can automate at least 80% with chatbot
            &amp; A.I. You can easily build your chatbot with our visual flow builder, and if at any point, your
            customer needs any help.</p>
          <p>You can connect with an Action, and then go to Basic Actions, then you can find “Talk to human/Pause
            automation”, and then your customer from 11+ social channels can talk directly to your intercom live chat
            support.</p>
          <p>After your customer initiates a conversation, you will see the new contacts created from social channels
            along with their questions.</p>
          <p>Smart ChatBot will pull the user’s profile, email &amp; phone to create the contact if there is any.</p>
          <p><img src="../assets/img/intercom-07.fa6d5704.png" alt="title"></p>
          <p>And now your intercom agent can talk directly back to the customer from 11+ social channels.</p>
          <p>By default, the live chat is set at 30 mins, after the time passed, if there is no active conversation, the
            user will be sent back to chatbot automation.</p>
          <h4 id="step-2-sending-files-images"><a href="#step-2-sending-files-images" class="header-anchor">#</a> Step
            2: Sending files &amp; Images</h4>
          <p><img src="../assets/img/intercom-08.b5fbcee3.png" alt="title"></p>
          <p>After your customer active live chat from our flow, your customers can send text, images &amp; files to
            your agent.</p>
          <p>Meanwhile, your intercom agent can also send images &amp; files back to the user.</p>
          <p>If the intercom agent adds any notes to the customer/conversation, the note content will also sync to
            Smart ChatBot’s subscribers</p>
          <p><img src="../assets/img/intercom-09.e28b6017.png" alt="title"></p>
          <p>Please note that you can also see all the live chat history inside of Smart ChatBot’s live chat.</p>
          <h4 id="step-3-ending-conversation"><a href="#step-3-ending-conversation" class="header-anchor">#</a> Step 3:
            Ending conversation</h4>
          <p>If your intercom live chat support helps the user solve the issue, and when they close the conversation,
            the user will be pushed back to the chatbot automation.</p>
          <p>If intercom live chat decides to follow up on the issue, for certain channels(Messenger, WhatsApp,
            Instagram) if it’s within 24 hours window, we will deliver the message. If it’s out of the 24-hour window,
            we will reply that the user is out of the contact window.</p>
          <p>If the user is within the contact window, any messages from the intercom agent will reset the 30 human
            support window &amp; activate live chat with the user.</p>
          <p><img src="../assets/img/intercom-10.0daad5ef.png" alt="title"></p>
        </div>
        <footer class="page-edit"><!---->
          <div class="last-updated"><span class="prefix">Last Updated:</span> <span class="time">11/18/2023, 10:48:22
              PM</span></div>
        </footer>
        <div class="page-nav">
          <p class="inner"><span class="prev">
              ←
              <a href="account.php" class="prev">
                Workspaces &amp; Members
              </a></span> <span class="next"><a href="whatsapp-api.php">
                WhatsApp + 360Dialog ($50/month)
              </a>
              →
            </span></p>
        </div>
      </main>

<?php
    include('footer.php');
?>