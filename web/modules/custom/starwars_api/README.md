# api_experiment

This module creates an API for consuming and displaying Star Wars data 

## Feature to create:

- create a UI that allows ELUs to query the SWapi database and present the results in a useful way. 
- pull data from swapi.dev


## Questions to answer:

- what data could be readily queried by an ELU, and subsequently useful to display?
- death star target selector? Displays different target planets and attributes? 
- .travis.yml seems to indicate I have cURL somewhere in here. Find out more about that.
- Decide if I want to use/add GraphQL to this. 

## Thoughts on how to pull this off:

- While noodling the problem, I can't think of a reason why this would need anything server-side. 
- I think I can do this all client-side without issue (in JS), I just want to make sure the error handling works. 
- I am thinking maybe build this in stages:
  - get something that spits out a chunk of data into the console
  - get it to display that data in an ugly format (naked HTML)
  - come up with a way to display different chunks of data based on inputs
  - hook that up to the UI so the ELU can pick which chunk of data they want based on an input
  - get some sort of error reporting working 
  - style the whole thing so that it makes sense and doesn't look like a hot mess 