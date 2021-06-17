# Structure

> This shows the structure of the site, the relationships between the tables and the policies that show what roles can do what within any tables.

## Table Information

- ***Users***
  - Used to store the information about the signed in user.
- ***Accounts***
  - These are the instagram accounts.
  - Information here will show if the account is active or inactive, private or public and also the username and the pk.
  - This table will be linked to either the teams or users.
  - These can be linked to a number of users or teams.
- ***Roles***
  - Used to store the possible roles of the users.
  - These are the starter user Roles and can only be changed if the user changes the package they are signed up to.
  - ***Admin***
    - This reserved for staff members.
    - Can view, create, delete and update all tables.
    - Is the only user that can create settings.
  - ***Free***
    - This for a new account.
    - They can only access their account for 7 days without purchasing anything.
    - This user can only view the main account we share with everyone.
    - Once they purchase anything they become a team admin.
    - Can also request to join a team if they know the team name.
  - ***Team Admin***
    - This is the role of the team administrator.
    - Can close the team. If they do this they become a free user, so do all of the teams members.
    - Can purchase more accounts, users, better scraping capabilities etc...
    - Can assign privileges to team members.
    - Can view, create delete and update anything to do with their team including users.
    - Can accept or deny team member requests.
  - ***Team Member***
    - This is the role for members of a team.
    - They have to pay nothing to be a team member.
    - If the team get closed the user then becomes a free user again.
    - By default they can only *view* anything available to the team.
    - Can be assigned privileges by their team admin.
    - Privileges can allow them to do anything within the team structure just like the admin.
- ***Teams***
  - Teams will start at a preset number of members.
  - Teams have to have a team admin.
  - New members can be added to the team by the team admin or a team member that the admin has assigned to allow this feature.
  - If the team admin closes the team down all team members will also have no further access.
- ***Setting Defaults***
  - Used to store default user, team and account settings.
  - This table contains the information about each of the possible settings including the type of setting, the default value and what it is meant for.
  - Only the admin can create settings.
  - Settings will be available in each of the other tables.
- ***Settings***
  - Used to store user, team and account settings.
  - These will be linked to both the setting defaults and the appropriate table.
- ***Posts***
  - Used to store scheduled instagram posts.
  - These will be attached to accounts.
  - Notifications for these posts will be to the user that created them.
  - If creator is in a team, they can delegate to a member of the team.

## Table Structure

### users

> Dashboard users.
>
> Linked to > (one) role > (one) team > (many) setting > (many) post > (many) accounts

| id | name | email | email_verified_at | password | picture | role_id | team_id | remember_token | created_at | updated_at |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |

### accounts

> Instagram accounts.
>
> Linked to > (one) team > (many) post > (many) setting > (many) users

| id | pk | username | team_id | created_at | updated_at |
| --- | --- | --- | --- | --- | --- |

### roles

> The available roles of the users.
>
> Linked to > (many) user

| id | name | description | created_at | updated_at |
| --- | --- | --- | --- | --- |

### teams

> Each user belongs to a team, even if they are the only member.
>
> Linked to > (many) user > (many) setting > (many) account > (many) posts

| id | name | created_at | updated_at |
| --- | --- | --- | --- |

### defaults

> The default settings for each of the tables.
>
> Linked to > (many) setting

| id | name | description | for_table | options | created_at | updated_at |
| --- | --- | --- | --- | --- | --- | --- |

### settings

> Used to store the settings for each of the tables.
>
> Linked to > (one) default > (one) account, team, user or post

| id | value | default_id | account_id | team_id | user_id | post_id | created_at | updated_at |
| --- | --- | --- | --- | --- | --- | --- | --- | --- |

### posts

> Used to store scheduled posts.
>
> Linked to > (one) account > (one) team > (many) setting > (many) user

| id | description | picture | hashtags | post_at | account_id | team_id | created_at | updated_at |
| --- | --- | --- | --- | --- | --- | --- | --- | --- |
