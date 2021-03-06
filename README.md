## Movie Rental Management System

### Introduction

Movie Rental Management System:

### Requirement

  * Administrator:  

  ![AdminUseCase](Misc/AdminUseCase.png)  

  * User:

  ![UserUseCase](Misc/UserUseCase.png)

### Model

  * MVC(Model & View &Controller)

  ![MVC](Misc/MVC.png)

  * Class Diagram:

  ![ClassDiagram](Misc/ClassDiagram.png)

  * ERD:

  ![ERD](Misc/ERD.png)


### File Tree
```
./
├── Class
│   └── Movie.php
├── Config
│   └── config.inc.php
├── Controller
│   └── Controller.php
├── Cover
│   ├── Once.jpg
│   ├── Pulp_Fiction.jpg
│   ├── The_Dark_Knight.jpg
│   ├── The_Godfather.jpg
│   ├── The_Godfather:PartII.jpg
│   └── The_Shawshank_Redemption.jpg
├── Database
│   ├── DAO
│   │   └── MovieDAO.php
│   └── DBManager.php
├── Misc
│   ├── AdminUseCase.png
│   ├── ClassDiagram.png
│   └── UserUseCase.png
├── Model
│   └── Model.php
├── README.md
├── SQL
│   └── database.sql
├── Style
│   ├── index_style.css
│   └── index_style.css~
├── View
│   ├── Index
│   │   ├── all_movies_template.php
│   │   └── index_html_template.php
│   └── View.php
└── index.php

```

### Github Collaboration Tutorial

1. Fork the project from organization into your git.

  If you not fork. otherwise, skip that.

2. Clone the repo from your remote repo into local

  If you not clone. otherwise, skip that.

  ```sh
  git clone https://github.com/your_user_name/Movie_Rental_Management_System.git
  ```

3. Sync with remote repo in organization.

  note: do this before you start to coding.

  ```sh
  git pull https://github.com/DITTeamProject/Movie_Rental_Management_System.git master
  # Sync the remote repo in organization with local folder

  git push
  # Push the local folder to your own github repo.
  ```

4. Create new branch from master.
  ```sh
  # the default branch is master

  git checkout -b new_branch_name
  # create and switch to new branch

  git checkout exist_branch_name
  # switch to existed branch

  git branch
  # view which branch you are in
  ```

5. Coding, testing and debugging or whatever you want to do.

6. Submit your code to new branch

  ```sh
  git add --all
  # add new files

  git commit -m "some message you want to tag"
  # commit

  git push origin new_branch_name
  # push to you github on new branch
  ```

7. New pull request

  Create new pull request for merging back to organization repo. and wait for response.

8. Sync you local folder and github

Follow step 3 to sync

__Note: there are some git command what you may need.__

  ```sh
  # delete old branch
  git branch -d old_branch_name

  # check git status
  git status
  ```
