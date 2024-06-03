# miniature-broccoli
Repo for Cinema Ticket System

## Getting Started
Here's a short guide on how to run this project locally. You may want to use my [Postman Collection](https://app.getpostman.com/join-team?invite_code=5034bc07bddc50744467610c83768d3e&target_code=3be2d4160f1de0133a129830764103bd) for running the project.
### Prerequisites
1. You must have [docker desktop](https://www.docker.com/products/docker-desktop/) installed and running locally.
2. You must have this project's code cloned locally.

### Building the Project
To run build this project locally, use the following command in the root directory:
```
docker compose -f docker-compose.local.yml up --force-recreate --build --remove-orphans -d
```

## My Approach
My approach was to make a basic Laravel backend to handle the ticketing service. It consisted of:
### Models
#### TicketType
TicketTypes define the type of ticket (standard, concession, etc).
#### Ticket
Tickets are the allocated tickets (i.e. a ticket a customer has been allocated).
#### TicketExtraType
TicketExtraTypes define the different extras that customers can purchase.
#### TicketExtra
TicketExtras are the extras associated with a customer's purchased tickets.
#### Baskets
Baskets are the grouping of purchased Tickets.

### Assumptions
1. I wasn't sure what ticket price to use for the 3-for-1 offer, so I picked a random one.
2. I wasn't sure if multiple extras could be allocated or not, so I allowed it.

### Pitfalls
1. My discount logic is hardcoded. I would have preferred to have this held in the database, to allow for end users to update the discount logic.
2. My project doesn't have automated tests. I was low on time, so unfortunately I did not have the chance to add in automated tests.

### Where I would improve
1. Automated tests with coverage report to maintain a reliable codebase.
2. Discount logic not hardcoded into the codebase.
3. More fleshed out discount system, not just picking a random ticket price to use as the free tickets.
4. Better storage of monetary values, I just went for a quick implementation which is prone to rounding inaccuracies.
5. CI/CD pipeline to automate deployments and running tests against PRs.
6. PR template to better format PRs and introduce consistency.

### Additional Comments
I just want to take the time to thank you for giving me the opportunity to participate in this coding test. While I was short on time, I gave it my best shot. If you have any questions then please feel free to reach out to me.
