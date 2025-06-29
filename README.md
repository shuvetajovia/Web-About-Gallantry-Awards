

``` . 🇮🇳 Gallantry Awards of India – A Web Tribute to Bravery .                                                           This is a tribute website honoring India's bravest heroes who received gallantry awards for their courage in war and peace.📁 Folder Structure 

```

internship/
│
├── wartime\_soldiers\_pic/         # Images used in wartime.html
├── peacetime\_award/              # Images used in peacetime.html
├── Additional Gallantry Medals/  # Images used in additional.html
│
├── image.jpeg                    # Header image for main page
├── video.mp4                     # Main video file (if used)
├── author.php                    # Web author bio (with image slideshow)
├── statistics.php                # Award statistics (PHP + Bootstrap)
├── mainpage.html                 # Central landing page
├── wartime.html                 # Wartime gallantry awards page
├── peacetime.html               # Peacetime gallantry awards page
├── addtional.html               # Additional gallantry medals (Sena/Nao/Vayu)
└── README.md                     # This file

✅ Requirements

- Web Browser (Chrome/Firefox/Edge)
- **XAMPP** or any PHP server installed to run `.php` files

## 🚀 How to Run

1. **Install XAMPP (if not already):**
   - Download from https://www.apachefriends.org
   - Install and open the XAMPP Control Panel

2. **Start Apache Server:**
   - Open XAMPP
   - Click **Start** next to Apache

3. **Move Project Folder:**
   - Copy your `internship` folder to:
     ```
     C:\xampp\htdocs\
     ```

4. **Run the Website:**
   - In your browser, open:
     ```
     http://localhost/internship/mainpage.html
     ```

5. **Access PHP Pages:**
   - Example for Statistics page:
     ```
     http://localhost/internship/statistics.php
     ```

---

## 💡 Notes

- PHP files like `author.php` and `statistics.php` **must be run through localhost**, not by opening directly in the browser.
- Images inside subfolders like `peacetime_award/` or `wartime_soldiers_pic/` should be linked using relative paths in HTML:
  ```html
  <img src="wartime_soldiers_pic/xyz.jpg" alt="Soldier Image">
  
## 🎯 Credits

* Website by **A Shuveta Jovi**
* All content is hand-curated with utmost respect for our Armed Forces
* Designed using HTML, CSS, Bootstrap, and PHP

## 🏁 Final Tip

> If something doesn’t load — double check:
>
> * Image paths
> * Whether Apache is running
> * Whether you are using `localhost`

🇮🇳 *Jai Hind!*
Let me know if you want this `README.md` as a downloadable file or need it converted to a plain `.txt`
