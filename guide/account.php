<?php
    include('header.php');
    include('sidebar.php');
?>

<main class="page">
        <div class="theme-default-content content__default">
          <h1 id="workspaces-members"><a href="#workspaces-members" class="header-anchor">#</a> Workspaces &amp; Members
          </h1>
          <p>As mentioned previously, workspace is to be seen as a team while members/users are the people working in
            the team.</p>
          <div class="custom-block danger">
            <p class="custom-block-title">Note</p>
            <p>A workspace can have many members and a member can join many workspaces in different roles.</p>
          </div>
          <h2 id="workspace-limitation"><a href="#workspace-limitation" class="header-anchor">#</a> Workspace Limitation
          </h2>
          <p>Generally, a workspace is designed for one business and it organizes all the resources for the business,
            such as payment accounts, email sender profiles, products information, etc.</p>
          <p>Each workspace has it's own <strong>billing</strong> and limitation on <strong>members</strong>,
            <strong>bot users</strong> and <strong>bots</strong> amount (fees applied for flexible add-ons).</p>
          <p>1 workspace can connect to:</p>
          <ul>
            <li>only 1 <strong>omni</strong> bot (8 channels)</li>
            <li>only 1 <strong>Facebook</strong> account</li>
            <li>only 1 <strong>Google</strong> account for <strong>Google My Business</strong></li>
            <li>only 1 <strong>Google</strong> account for <strong>Google Sheet</strong></li>
            <li>only 1 <strong>Google</strong> account for <strong>Gmail</strong></li>
            <li>only 1 <strong>Google</strong> account for <strong>Dialogflow</strong></li>
            <li>only 1 <strong>Intercom</strong> account</li>
            <li>only 1 <strong>Stripe</strong> account</li>
            <li>only 1 <strong>PayPal</strong> account</li>
            <li>only 1 <strong>Cloudinary</strong> account</li>
            <li>only 1 <strong>Calendly</strong> account</li>
            <li>only 1 <strong>MongoDB Cloud</strong> account</li>
            <li>only 1 <strong>Twilio</strong> account</li>
            <li>only 1 <strong>SignalWire</strong> account</li>
            <li>only 1 <strong>Message</strong> Media account</li>
            <li>only 1 <strong>SendGrid</strong> account</li>
            <li>only 1 <strong>MailChimp</strong> account</li>
            <li>up to 10 <strong>SMTP</strong> profiles (SMTP email sender)</li>
          </ul>
          <p>Moreover, 1 workspace can download each mini-app only once. For example, you download a WooCommerce
            mini-app and connect your workspace to a WooCommerce account, you are unable to download it again for
            connecting another WooCommerce account. Unless the app developer design it to be connecting more than 1
            account.</p>
          <div class="custom-block tip">
            <p class="custom-block-title">Important</p>
            <p>You are allow to connect your workspace to only 1 Facebook/Google(for Google My Business) account but you
              can create bots for more than 1 Facebook Page / Google Business.</p>
          </div>
          <h3 id="connect-to-multiple-facebook-pages-google-businesses"><a
              href="#connect-to-multiple-facebook-pages-google-businesses" class="header-anchor">#</a> Connect to
            Multiple Facebook Pages / Google Businesses</h3>
          <p><img src="../assets/img/workspace1.2334de1d.png" alt="workspace setting"></p>
          <p>You can connect to any Facebook Page / Google My Business and create bots for them as long as <strong>you
              are the owner / admin</strong> of those pages / businesses.</p>
          <p>When you connect to your Facebook account, make sure you select all the pages that require management and
            there you go. For example, you wanted to build bots for your clients, simply have your clients invite your
            Facebook account to be an admin of their Facebook pages.</p>
          <p>Same for Google My Business, have your clients invite your Google account to be an admin of their
            businesses and then you can build Google bots for them.</p>
          <h3 id="should-i-use-different-workspaces-for-different-business"><a
              href="#should-i-use-different-workspaces-for-different-business" class="header-anchor">#</a> Should I use
            different workspaces for different business?</h3>
          <p>It's of your own choice.</p>
          <h2 id="workspace-settings"><a href="#workspace-settings" class="header-anchor">#</a> Workspace Settings</h2>
          <h3 id="workspace-profile-timezone"><a href="#workspace-profile-timezone" class="header-anchor">#</a>
            Workspace Profile (Timezone)</h3>
          <p><img src="../assets/img/workspace.772e9306.png" alt="workspace setting"></p>
          <p>To edit the profile of your workspace, click <strong>Workspace Settings</strong> and
            <strong>profile</strong> in the above screenshot. You can change your logo, workspace name, timezone and
            default flow theme.</p>
          <div class="custom-block tip">
            <p class="custom-block-title">TIP</p>
            <p>The timezone setting of a workspace will affect how your bot process time value. For example, the system
              value &quot;BOT_CURRENT_TIME&quot; is different when you have different timezone settings. Moreover,
              system value &quot;NOW&quot; and &quot;TODAY&quot; is based on bot users' timezones, if they don't have a
              timezone in profile, workspace timezone is used.</p>
          </div>
          <h3 id="workspace-management"><a href="#workspace-management" class="header-anchor">#</a> Workspace Management
          </h3>
          <p><img
              src="data:image/png;base64,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"
              alt="go to accounts"></p>
          <p>On the upper left corner of your dashboard, click a workspace name to switch to the workspace. By clicking
            1 and 2, you will jump to the workspace management page:</p>
          <p><img src="../assets/img/accounts.4f017609.png" alt="overview of accounts"></p>
          <p>Here you can see all the workspaces you've joined. As marked in the screenshot, you can:</p>
          <ol>
            <li>Create new workspaces (the creator of a workspace becomes the owner)</li>
            <li>Switch to that workspace</li>
            <li>If you are not the owner of the workspace, click the yellow arrow to leave the workspace.</li>
            <li>If you are the owner of the workspace, you will see a red x instead. Click it to delete the workspace.
            </li>
          </ol>
          <h3 id="api-keys"><a href="#api-keys" class="header-anchor">#</a> API Keys</h3>
          <p>You can access the &quot;API Keys&quot; page from area 1 in the above screenshot.</p>
          <p><img src="../assets/img/api.8e36c58d.png" alt="API key"></p>
          <p>Select a workspace and a flow to create an API key to access the flow from API calls. Smart ChatBot has also integrated with many
            third-party automation services such as Zapier, Pabbly Connect, Integrately, Integromat, etc.</p>
          <h2 id="user-settings-timezone"><a href="#user-settings-timezone" class="header-anchor">#</a> User Settings
            (Timezone)</h2>
          <p><img src="../assets/img/user.855320c2.png" alt="user setting"></p>
          <p>In the upper right corner, click your user name and &quot;Your Settings&quot;. Moreover, you can find
            support links here. For example, try &quot;Quick Tour&quot; to get familiar with your dashboard!</p>
          <p><img src="../assets/img/user2.ebeba636.png" alt="user setting"></p>
          <div class="custom-block tip">
            <p class="custom-block-title">TIP</p>
            <p>The timezone setting of an Smart ChatBot user will affect the time shown in the web portal such as the time shown
              in the conversation in your Live Chat, Error Logs, etc. See the screenshot below.</p>
          </div>
          <p><img
              src="data:image/png;base64,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"
              alt="workspace setting"></p>
          <p>In profile, you can update your photo, user name, email address, timezone and time format.</p>
          <h2 id="members-and-roles"><a href="#members-and-roles" class="header-anchor">#</a> Members and Roles</h2>
          <p>Each &quot;Smart ChatBot account&quot; is to be seen as a person/user. Members are all the people that have limited
            or full access to the workspace. There are 3 types of roles, <strong>Owner, Admin and Member</strong>.</p>
          <p><img src="../assets/img/sidebar-difference.f0f6661d.png" alt="overview of members"></p>
          <p>The first user who creates the workspace becomes the only owner of the workspace.</p>
          <h3 id="member-has-limited-access-to-the-account-a-member-can"><a
              href="#member-has-limited-access-to-the-account-a-member-can" class="header-anchor">#</a> Member has
            limited access to the account. A member can</h3>
          <ul>
            <li>View and edit all flows</li>
            <li>View analytics</li>
          </ul>
          <h3 id="admin-has-limited-access-to-the-account-an-admin-can"><a
              href="#admin-has-limited-access-to-the-account-an-admin-can" class="header-anchor">#</a> Admin has limited
            access to the account. An admin can</h3>
          <ul>
            <li><strong>Have all features with Member</strong></li>
            <li>Manage channel connections (add numbers, agents, connect pages, etc)</li>
            <li>Manage all integrations</li>
            <li>Manage the ecommerce system</li>
            <li>Manage templates</li>
            <li>Manage mini-apps</li>
          </ul>
          <h3 id="owner-has-full-access-to-the-workspace-owner-can"><a
              href="#owner-has-full-access-to-the-workspace-owner-can" class="header-anchor">#</a> Owner has full access
            to the workspace. Owner can</h3>
          <ul>
            <li><strong>Have all features with Admin</strong></li>
            <li>Manage workspace profile</li>
            <li>Manage members in the workspace (invite, delete, edit role)</li>
            <li>Manage subscription and payment</li>
          </ul>
          <h3 id="invite-delete-edit-role-of-member"><a href="#invite-delete-edit-role-of-member"
              class="header-anchor">#</a> Invite, Delete &amp; Edit Role of Member</h3>
          <p><img src="../assets/img/members.e21d4321.png" alt="overview of members"></p>
          <p>(Owner Only) Follow steps 1, 2 and 3 in the above screenshot to send out an invitation to a new member with
            his/her email address and role setting.</p>
          <p>If the new member is already an Smart ChatBot user, he/she can accept the invitation in the Smart ChatBot notification
            center (the bell icon in the upper right corner, see 2 screenshots below).</p>
          <p><img src="../assets/img/invitation.e1363a3d.png" alt="overview of members"></p>
          <p><img src="../assets/img/invitation2.92cca8e6.png" alt="overview of members"></p>
          <p>If the new member is not an Smart ChatBot user yet, the invitation email will contain a link to set up a new
            password. Once set up, the member can then also log into the workspace with their own login details.</p>
          <h3 id="eidt-role-of-members"><a href="#eidt-role-of-members" class="header-anchor">#</a> Eidt Role of Members
          </h3>
          <p>(Owner Only) You can assign a role at the time you invite new members or edit it later on the member page.
            Click on the gear icon to change the role of a member.</p>
        </div>
        <footer class="page-edit"><!---->
          <div class="last-updated"><span class="prefix">Last Updated:</span> <span class="time">5/8/2022, 2:40:02
              AM</span></div>
        </footer>
        <div class="page-nav">
          <p class="inner"><span class="prev">
              ←
              <a href="components.php" class="prev">
                Platform Overview
              </a></span> <span class="next"><a href="setup-create.php">
                Connect to Channels
              </a>
              →
            </span></p>
        </div>
      </main>

<?php
    include('footer.php');
?>