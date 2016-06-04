Workflow
========

Open Source Projects
--------------------

1. Fork the repository
2. Create a branch
3. Submit a pull request that point to the master branch
4. Put a label on your Pull Request
  - `bug` if you fix a bug. This will end by creating a x.y.Z+1 tag
  - `enhancement` if you add a new feature. This will end by creating a x.Y+1.0 tag
  - `bc-break` if you add a backward compatible break. This will end by creating a X+1.0.0 tag

Company Projects
----------------

### JIRA Workflow

1. When created a ticket is set to "suggested". You can put it to "TODO"
2. When a ticket status is "TODO", you can take it, set it to "In progress" and work on it
3. Once you've finished your work, set it to "Dev OK".
4. When the staging environment is available, deploy your work on it and put the JIRA ticket to "To Test" status.
5. Once the ticket has been tested by your product owner, it will pass to "To deliver"
6. Then, you can deploy it to production and put the ticket to "Done"


Assuming you want to work on ticket TIC-512.

1. Assign yourself to the ticket
2. Set the ticket status to "In Progress"
3. In the git repository, type: `git checkout master; git pull --rebase; git checkout -b TIC-512 master`
4. Do what you have to do, commit and push the branch in the repository.
5. Create a Pull Requests