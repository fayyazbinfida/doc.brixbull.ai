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
          <p><img src="../assets/img/Workspace Settings.png" alt="workspace setting"></p>
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
              src="../assets/img/Workspace Management.png"
              alt="go to accounts"></p>
          <p>On the upper left corner of your dashboard, click a workspace name to switch to the workspace. By clicking
            1 and 2, you will jump to the workspace management page:</p>
          <p><img src="../assets/img/create_workspace.jpg" alt="overview of accounts"></p>
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
          <p><img src="../assets/img/Workspace_Api_keys.png" alt="API key"></p>
          <p>Select a workspace and a flow to create an API key to access the flow from API calls. Smart ChatBot has also integrated with many
            third-party automation services such as Zapier, Pabbly Connect, Integrately, Integromat, etc.</p>
          <h2 id="user-settings-timezone"><a href="#user-settings-timezone" class="header-anchor">#</a> User Settings
            (Timezone)</h2>
          <p><img src="../assets/img/User_Setting_(Time Zone).png" alt="user setting"></p>
          <p>In the upper right corner, click your user name and &quot;Your Settings&quot;. Moreover, you can find
            support links here. For example, try &quot;Quick Tour&quot; to get familiar with your dashboard!</p>
          <p><img src="../assets/img/User Setting (Time Zone)_2.png" alt="user setting"></p>
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
          <p><img src="../assets/img/Invite_delete_Edit_240105.png" alt="overview of members"></p>
          <p>(Owner Only) Follow steps 1, 2 and 3 in the above screenshot to send out an invitation to a new member with
            his/her email address and role setting.</p>
          <p>If the new member is already an Smart ChatBot user, he/she can accept the invitation in the Smart ChatBot notification
            center (the bell icon in the upper right corner, see 2 screenshots below).</p>
          <p><img src="../assets/img/invitation.e1363a3d.jpg" alt="overview of members"></p>
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