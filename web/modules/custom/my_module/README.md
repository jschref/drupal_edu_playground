# Ticket work

### James' tickets

Jira number PROJ-123:

"As a marketer, I would like the copyright date in the footer to automatically update
Right now I have to update it manually and I forget which makes me look forgetful"

**Analysis:**
The scope of this ticket is to add a custom block plugin which we can use later in the footer.
It does NOT include theming. This should be a simple block with no configuration options. The
rendered output of the build() should be hard set but **translateable** text "This Site Copyright"
followed by today's date formatted as a year only.
The year should be printed out using the php date() function.