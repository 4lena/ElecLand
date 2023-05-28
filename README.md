<!-- PROJECT LOGO -->
<div align="center">
  <a href="https://github.com/4lena/ElecLand">
    <img src="ElecLand.png" alt="Logo">
  </a>
</div>

<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
    </li>
    <li>
      <a href="#built-with">Built With</a>
    </li>
    <li>
      <a href="#main-features">Main Features</a>
    </li>
    <li>  
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
  </ol>
</details>

<!-- introduction -->
## About The Project

ElecLand is an E-commerce website that specializes in selling a wide range of electronic products. The website 
provides users with a seamless shopping experience that allows them to browse various products, view product details, 
add products to their cart, checkout, and see the invoice. Furthermore, ElecLand provides an authentic feature where users can sign up for an 
account on ElecLand or sign in if they already have an account.

<!-- technology -->
## Built With

* [![My Skills](https://skills.thijs.gg/icons?i=bootstrap,html,css)](https://skills.thijs.gg)
* [![My Skills](https://skills.thijs.gg/icons?i=js,jquery,mysql)](https://skills.thijs.gg)
* [![My Skills](https://skills.thijs.gg/icons?i=php,laravel)](https://skills.thijs.gg)

<!-- technology -->
## Main Features

### Home Page
<div align="center">
  <img src="media/1.gif" width="50%" alt="home page">
</div>
On the home page users can navigate through the about us, top products, categories, and our features sections.


<!-- GETTING STARTED -->
## Getting Started


### Prerequisites to use it on local host

* MongoDB.
* Visual Studio Code.
* Spyder in Anaconda.
* Localhost server you can use MAMP local server.
* All the needed packages to run all the python scripts.

### Installation

1. Install the Toxicity Inspector files and store them in your localhost directory.
2. In the Db.php file connect the MongoDB database using your username and password.
   ```sh
   $client = new MongoDB\Client(
    'your connection should be written here'
   );
   ```
3. Run all the Python files in Spyder make sure to edit the directories and to download the required modules <br>to download the modules paste the following code in the terminal:
   ```sh
   pip install module name
   ```
4. Edit the directories of the Python connection code in the following PHP files:
* overallToxicity.php
* InspectData.php
* UploadedFileForm.php
* comparison.php
* feedback.php
* interpretation.php
* interpretationOfaComment.php

<br>**For example** edit the following command to match your python environment:
   ```sh
   $command = escapeshellcmd('write yout python environment here  API.py "'.$UploadedFile.'" "'.$fileID.'"');
   ```
5. Edit the directories of the following Python files:
* API.py
* APIar.py
* InspectData.py
* split.py
* splitAPI.py
* langDetection.py
* IntereptToxicity.py
* Advanced.py
* AdvancedFeedback.py
* BaseLine.py
* BaseLineFeedback.py
* scores.py
* scoresFeedback.py
* Feedback.py

<br>**For example** edit the first line of the python code to match the directory of your environment:
   ```sh
   #!write your environment directory here
   ```
6. Finally, run the files using your localhost server.





