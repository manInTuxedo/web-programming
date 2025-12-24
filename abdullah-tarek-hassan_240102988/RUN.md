# How to Run VitalTrack

Since this project uses **PHP** and **MySQL**, you cannot simply open the HTML files. You must run it through a local web server (like XAMPP).

## Step 1: Install XAMPP
If you haven't already, download and install [XAMPP](https://www.apachefriends.org/index.html).

## Step 2: Move Project to htdocs
1.  Navigate to your XAMPP installation folder (usually `C:\xampp`).
2.  Open the `htdocs` folder.
3.  Copy the entire `abdullah-tarek-hassan_240102988` folder into `htdocs`.
    *   New path should look like: `C:\xampp\htdocs\abdullah-tarek-hassan_240102988`

## Step 3: Setup Database
1.  Open XAMPP Control Panel.
2.  Start **Apache** and **MySQL**.
3.  Click **Admin** button next to MySQL to open phpMyAdmin (or go to `http://localhost/phpmyadmin`).
4.  Click **Import** tab.
5.  Choose the `database.sql` file from your project folder.
6.  Click **Go** at the bottom to create the database and tables.

## Step 4: Run the App
1.  Open your browser.
2.  Go to: `http://localhost/abdullah-tarek-hassan_240102988/Frontend/01-Main.html`
3.  You should see the landing page!

## Troubleshooting
- **Database Connection Error?**
    - Open `backend/database/connection.php`.
    - Check if `$password` matches your MySQL password (default for XAMPP is empty `"2007"`).
- **404 Not Found?**
    - Ensure you copied the folder correctly to `htdocs`.
    - Check the URL matches your folder name exactly.
