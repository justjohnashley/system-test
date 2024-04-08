<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, ">
    <link rel="icon" href="assets/img/buffalo.ico" type="image/x-icon">
    <title>Dashboard Test</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Fonts and icons -->
    <script src="assets/js/webfont/webfont.min.js"></script>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrapper">

        <aside id="sidebar">
            <!-- Content for Sidebar -->
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#"><i class="fas fa-book-reader pe-2"></i>
                        LU - Digital Library</a>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        <i class="fas fa-user-shield pe-2"></i>
                        Logged in as Library Director
                    </li>
                    <li class="sidebar-item">
                        <a href="index.html" class="sidebar-link">
                            <i class="fas fa-home pe-2"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="sidebar-header">
                        Admin Controls
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#libholds" data-bs-toggle="collapse"
                            aria-expanded="false">
                            <i class="fas fa-bookmark pe-2"></i>
                            Library Holdings
                        </a>
                        <ul id="libholds" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link" data-bs-target="#pubmat" data-bs-toggle="collapse"
                                    aria-expanded="false">
                                    <i class="fas fa-user-check ps-3 pe-2"></i>
                                    Published Materials
                                </a>
                                <ul id="pubmat" class="sidebar-dropdown list-unstyled collapse">
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">&emsp;eBooks</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="books.php" class="sidebar-link">&emsp;Books</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">&emsp;Clippings</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">&emsp;eJournals and eMagazines</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">&emsp;Fiction</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link" data-bs-target="#notpubmat" data-bs-toggle="collapse"
                                    aria-expanded="false">
                                    <i class="fas fa-user-alt-slash ps-3 pe-2"></i>
                                    Unpublished Materials
                                </a>
                                <ul id="notpubmat" class="sidebar-dropdown list-unstyled collapse">
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">&emsp;Workbooks</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">&emsp;SHS Workbooks</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">&emsp;Thesis</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">&emsp;Capstone</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">&emsp;Feasibility Studies</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">&emsp;Manuscript</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">&emsp;Narrative Reports</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="circulation.html" class="sidebar-link">
                            <i class="fas fa-redo pe-2"></i>
                            Circulation
                        </a>
                    </li>
                    <li class="sidebar-header">
                        Automated Processes
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#automation"
                            data-bs-toggle="collapse" aria-expanded="false">
                            <i class="fas fa-hashtag pe-2"></i>
                            Report Generation
                        </a>
                        <ul id="automation" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Inventory</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link" data-bs-target="#logb" data-bs-toggle="collapse"
                                    aria-expanded="false">
                                    Logbook Records
                                </a>
                                <ul id="logb" class="sidebar-dropdown list-unstyled collapse">
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">&ensp;Student and Personnel</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">&ensp;Visitors</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </aside>

        <!-- MAIN -->
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>

                </button>
                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="image/pfp.jpg" class="avatar img-fluid rounded" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="profile.php" class="dropdown-item">My Profile</a>
                                <a href="#" class="dropdown-item">Settings</a>
                                <a href="login.php" class="dropdown-item">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="content px-3 py-2">
                <div class="accordion accordion-flush rounded-bottom" id="accordionFlush">

                    <div class="accordion-item rounded-3">
                      <div class="bg-success text-start p-1 rounded-top"><h2 class="text-white my-2 mx-3"> Overview </h2></div>
                  
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed rounded-bottom" type="button" data-bs-toggle="collapse" 
                            data-bs-target="#flush-collapseDashboard" aria-expanded="false" aria-controls="flush-collapseDashboard">
                            Dashboard
                          </button>
                        </h2>
                        <div id="flush-collapseDashboard" class="accordion-collapse collapse" data-bs-parent="#accordionFlush">
                          <div class="accordion-body text-secondary"> Dashboard includes data visualization gathered from multiple sources, which can 
                            be used for various reasons of data monitoring, measurement, and analysis. The administrator 
                            has access to the circulation history, logbook records, borrowed books, and borrowing requests. 
                          </div>
                        </div>
                  
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed rounded-bottom" type="button" data-bs-toggle="collapse" 
                            data-bs-target="#flush-collapselibholdings" aria-expanded="false" aria-controls="flush-collapselibholdings">
                            Library Holdings
                          </button>
                        </h2>
                        <div id="flush-collapselibholdings" class="accordion-collapse collapse" data-bs-parent="#accordionFlush">
                          <div class="accordion-body text-secondary"> Library Holdings includes both published and unpublished materials. Each material 
                            allows an administrator to add, view, edit, delete, and upload a cover photo. 
                          </div>
                        </div>
                  
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed rounded-bottom" type="button" data-bs-toggle="collapse" 
                            data-bs-target="#flush-collapsecirc" aria-expanded="false" aria-controls="flush-collapsecirc">
                            Circulation
                          </button>
                        </h2>
                        <div id="flush-collapsecirc" class="accordion-collapse collapse" data-bs-parent="#accordionFlush">
                          <div class="accordion-body text-secondary"> Circulation is for borrowing records. The administrator may open the circulation for 
                            those who want to borrow books. A library record will be displayed once the system has identified 
                            the borrower. This page displays the individual's records, including the books they have returned 
                            and their borrowing activities. 
                          </div>
                        </div>
                  
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed rounded-bottom" type="button" data-bs-toggle="collapse" 
                            data-bs-target="#flush-collapserepgen" aria-expanded="false" aria-controls="flush-collapserepgen">
                            Report Generation
                          </button>
                        </h2>
                        <div id="flush-collapserepgen" class="accordion-collapse collapse" data-bs-parent="#accordionFlush">
                          <div class="accordion-body text-secondary"> Report Generation consists of inventory and logbook records. The inventory includes 
                            records of published and unpublished materials, as well as records of borrowed and returned 
                            books. The logbook primarily records those who visit the library, including students, staff, and 
                            visitors. The system has the capability to automatically generate those reports, hence minimizing 
                            the workload for the library staff. 
                           </div>
                        </div>
                  
                    </div>
                  
                                      
                    <div class="accordion-item rounded-3 mt-4">
                      <div class="bg-success text-start p-1 rounded-top"><h2 class="text-white my-2 mx-3"> Getting Started </h2></div>
                  
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed rounded-bottom" type="button" data-bs-toggle="collapse" 
                            data-bs-target="#flush-collapselogin" aria-expanded="false" aria-controls="flush-collapselogin">
                            How do i log in?
                          </button>
                        </h2>
                        <div id="flush-collapselogin" class="accordion-collapse collapse" data-bs-parent="#accordionFlush">
                          <div class="accordion-body text-secondary"> <p class="fw-bold">The website is exclusively intended for employees of the Laguna 
                            University library. It is crucial to ensure that you access the right website in order to successfully log in. 
                            In order to gain access to your account, it is necessary for you to be capable of performing the steps that follow:</p>
                            1. Enter your credentials. Enter your username or email address in the designated field. This is the identifier 
                            you used when you registered for the account. In the password field, enter your password. Remember that passwords are 
                            case-sensitive.<br>
                            <br> 2. After entering your details, click the “Login” button to access your account.
                          </div>
                        </div>
                    </div>
                  
                  
                    <div class="card mt-5 rounded-5">
                      <div class="card-body text-bg-success p-0 d-flex flex-fill rounded-5">
                        <div class="row g-0 w-100">
                          <div class="col-4">
                            <div class="p-2 m-1 mt-2 ms-4">
                              <h3 class="fw-bold"> FAQs </h3>
                            </div>
                          </div>
                        </div>
                       </div>
                    </div>
                                         
                  
                    <div class="accordion-item rounded-3 mt-4">
                      <div class="bg-success text-start p-1 rounded-top"><h2 class="text-white my-2 mx-3"> Managing Books </h2></div>
                  
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed rounded-bottom" type="button" data-bs-toggle="collapse" 
                            data-bs-target="#flush-collapseadd" aria-expanded="false" aria-controls="flush-collapseadd">
                            How can I add a new book?
                          </button>
                        </h2>
                        <div id="flush-collapseadd" class="accordion-collapse collapse" data-bs-parent="#accordionFlush">
                          <div class="accordion-body text-secondary"> <p class="fw-bold"> To add a new book, you must be able to follow 
                            the steps below:</p> 
                            1. Select the option labeled "Library Holdings." <br>
                            <br> 2. Upon clicking on the library holdings, two materials will be displayed. To access ebooks, books, 
                            clippings, e-journals, e-magazines, and fiction, simply click on the published material. To access the 
                            workbooks, SHS workbooks, theses, capstones, feasibility studies, manuscripts, and narrative reports, 
                            simply click on the unpublished materials.<br>
                            <br> 3. To add new books, select the "Books" option. <br>
                            <br> 4. Select the add button. <br>
                            <br> 5. Enter all the needed information. <br>
                            <br> 6. Select the "submit" button in order to successfully add a new book.
                          </div>
                        </div>
                  
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed rounded-bottom" type="button" data-bs-toggle="collapse" 
                            data-bs-target="#flush-collapseedit" aria-expanded="false" aria-controls="flush-collapseedit">
                            How can I edit the details of an existing book?
                          </button>
                        </h2>
                        <div id="flush-collapseedit" class="accordion-collapse collapse" data-bs-parent="#accordionFlush">
                          <div class="accordion-body text-secondary"> <p class="fw-bold"> To edit the details of an existing book, 
                            you must be able to follow the steps below:</p> 
                            1. Select the option labeled "Library Holdings." <br>
                            <br> 2. Upon clicking on the library holdings, two materials will be displayed. To access ebooks, books, 
                            clippings, e-journals, e-magazines, and fiction, simply click on the published material. To access the 
                            workbooks, SHS workbooks, theses, capstones, feasibility studies, manuscripts, and narrative reports, 
                            simply click on the unpublished materials.<br>
                            <br> 3. To edit the details of an existing book, select the "Books" option. <br>
                            <br> 4. Find the existing book you want to edit by using the search button. <br>
                            <br> 5. Select the yellow icon labeled Edit. Revise the information you want to change. <br>
                            <br> 6. Select the "submit" button in order to successfully edit the details of an existing book.
                          </div>
                        </div>
                  
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed rounded-bottom" type="button" data-bs-toggle="collapse" 
                            data-bs-target="#flush-collapsedel" aria-expanded="false" aria-controls="flush-collapsedel">
                            How can I delete a book?
                          </button>
                        </h2>
                        <div id="flush-collapsedel" class="accordion-collapse collapse" data-bs-parent="#accordionFlush">
                          <div class="accordion-body text-secondary"> <p class="fw-bold"> To delete a book, 
                            you must be able to follow the steps below:</p> 
                            1. Select the option labeled "Library Holdings." <br>
                            <br> 2. Upon clicking on the library holdings, two materials will be displayed. To access ebooks, books, 
                            clippings, e-journals, e-magazines, and fiction, simply click on the published material. To access the 
                            workbooks, SHS workbooks, theses, capstones, feasibility studies, manuscripts, and narrative reports, 
                            simply click on the unpublished materials.<br>
                            <br> 3. To delete a book, select the "Books" option. <br>
                            <br> 4. Find the book you want to delete by using the search button. <br>
                            <br> 5. Select the red icon labeled Delete. <br>
                            <br> 6. Select the "delete" button in order to successfully delete a book.
                          </div>
                        </div>
                  
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed rounded-bottom" type="button" data-bs-toggle="collapse" 
                            data-bs-target="#flush-collapsesearch" aria-expanded="false" aria-controls="flush-collapsesearch">
                            How can I search for a specific book?
                          </button>
                        </h2>
                        <div id="flush-collapsesearch" class="accordion-collapse collapse" data-bs-parent="#accordionFlush">
                          <div class="accordion-body text-secondary"> <p class="fw-bold"> To search for a specific book, 
                            you must be able to follow the steps below:</p> 
                            1. Select the option labeled "Library Holdings." <br>
                            <br> 2. Upon clicking on the library holdings, two materials will be displayed. To access ebooks, books, 
                            clippings, e-journals, e-magazines, and fiction, simply click on the published material. To access the 
                            workbooks, SHS workbooks, theses, capstones, feasibility studies, manuscripts, and narrative reports, 
                            simply click on the unpublished materials.<br>
                            <br> 3. To search for a specific book, select the "Books" option. <br>
                            <br> 4. Find the book you want to search by using the search button. <br>
                            <br> 5. Enter the book title you are searching for. <br>
                            <br> 6. Select the search icon button in order to successfully search a specific book.
                          </div>
                        </div>
                  
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed rounded-bottom" type="button" data-bs-toggle="collapse" 
                            data-bs-target="#flush-collapseupload" aria-expanded="false" aria-controls="flush-collapseupload">
                            How can I upload a cover photo for each book?
                          </button>
                        </h2>
                        <div id="flush-collapseupload" class="accordion-collapse collapse" data-bs-parent="#accordionFlush">
                          <div class="accordion-body text-secondary"> <p class="fw-bold"> To upload a cover photo for each book, 
                            you must be able to follow the steps below:</p> 
                            1. Select the option labeled "Library Holdings." <br>
                            <br> 2. Upon clicking on the library holdings, two materials will be displayed. To access ebooks, books, 
                            clippings, e-journals, e-magazines, and fiction, simply click on the published material. To access the 
                            workbooks, SHS workbooks, theses, capstones, feasibility studies, manuscripts, and narrative reports, 
                            simply click on the unpublished materials.<br>
                            <br> 3. To upload a cover photo for each book, select the "Books" option. <br>
                            <br> 4. Find the book to which you want to upload a cover photo by using the search button. <br>
                            <br> 5. Select the upload button in the cover section and upload a cover photo. <br>
                            <br> 6. Repeat the process for other books and materials.
                          </div>
                        </div>
                                        
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed rounded-bottom" type="button" data-bs-toggle="collapse" 
                            data-bs-target="#flush-collapseview" aria-expanded="false" aria-controls="flush-collapseview">
                            How can I view the book I added?
                          </button>
                        </h2>
                        <div id="flush-collapseview" class="accordion-collapse collapse" data-bs-parent="#accordionFlush">
                          <div class="accordion-body text-secondary"> <p class="fw-bold"> To view the book that has been added, 
                            you must be able to follow the steps below:</p> 
                            1. Select the option labeled "Library Holdings." <br>
                            <br> 2. Upon clicking on the library holdings, two materials will be displayed. To access ebooks, books, 
                            clippings, e-journals, e-magazines, and fiction, simply click on the published material. To access the 
                            workbooks, SHS workbooks, theses, capstones, feasibility studies, manuscripts, and narrative reports, 
                            simply click on the unpublished materials.<br>
                            <br> 3. To view the book that has been added, select the "Books" option. <br>
                            <br> 4. Find the book to which you want to view by using the search button. <br>
                            <br> 5. To successfully view a book, select the blue "View" icon. <br>
                            <br> 6. Repeat the process for other books and materials.
                          </div>
                        </div>
                    </div>
                  
                    <div class="accordion-item rounded-3 mt-4">
                      <div class="bg-success text-start p-1 rounded-top"><h2 class="text-white my-2 mx-3"> Borrowing Books </h2></div>
                  
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed rounded-bottom" type="button" data-bs-toggle="collapse" 
                            data-bs-target="#flush-collapseborrow" aria-expanded="false" aria-controls="flush-collapseborrow">
                            How can I borrow a book?
                          </button>
                        </h2>
                        <div id="flush-collapseborrow" class="accordion-collapse collapse" data-bs-parent="#accordionFlush">
                          <div class="accordion-body text-secondary"> <p class="fw-bold"> To borrow a book, 
                            you must be able to follow the steps below:</p> 
                            1. The borrower will go to the library administrator and show the book he or she wants to borrow. 
                            The administrator will select the "Circulation" option. <br>
                            <br> 2. Upon clicking on the circulation, 3 buttons can be seen labeled "College," "SHS," and "Personnel." 
                            Click the button for the borrower status.<br>
                            <br> 3. Upon clicking on one of the buttons, a search button for searching IDs will be displayed.
                            Enter the borrower's identification number. <br>
                            <br> 4. Upon entering the borrower's ID, the library record will be automatically shown. Enter the materials 
                            category and the title of the book that the borrower wants to borrow, then search it. <br>
                            <br> 5. The book will be displayed. To successfully borrow a book, simply click the Borrow Button. 
                          </div>
                        </div>
                  
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed rounded-bottom" type="button" data-bs-toggle="collapse" 
                            data-bs-target="#flush-collapselimitdurations" aria-expanded="false" aria-controls="flush-collapselimitdurations">
                            What are the borrowing limits and durations?
                          </button>
                        </h2>
                        <div id="flush-collapselimitdurations" class="accordion-collapse collapse" data-bs-parent="#accordionFlush">
                          <div class="accordion-body text-secondary"> <p class="fw-bold"> The borrowing limits and durations are as follows:</p> 
                            1. The borrower has permission to borrow any desired books, however, the books are limited 
                            to use within the premises of the library. <br>
                            <br> 2. Prior to borrowing, the book must be handed to the library administrator. <br>
                            <br> 3. The borrower is allowed to use the borrowed book for a single day, and it is mandatory to 
                            return the book prior to the library's closing time. <br>
                            <br> 4. Noncompliance will lead to penalties.
                          </div>
                        </div>
                  
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed rounded-bottom" type="button" data-bs-toggle="collapse" 
                            data-bs-target="#flush-collapsefees" aria-expanded="false" aria-controls="flush-collapsefees">
                            Are there any fines or fees for late returns, lost, or damaged books?
                          </button>
                        </h2>
                        <div id="flush-collapsefees" class="accordion-collapse collapse" data-bs-parent="#accordionFlush">
                          <div class="accordion-body text-secondary"> <p class="fw-bold"> Yes. If any of the following actions 
                            have been taken, the borrower is responsible for paying the fines:</p> 
                            1. The book that was borrowed was not returned within the allotted time or before the library closed. <br>
                            <br> 2. The book that was borrowed was used outside the library or was taken home. <br>
                            <br> 3. The book that was borrowed has been lost. <br>
                            <br> 4. The borrower returned the book in a damaged condition. (e.g., if a page is missing, 
                            if someone writes on the book, if a page is torn, etc.)
                          </div>
                        </div>
                    </div>
                  
                    <div class="accordion-item rounded-3 mt-4">
                      <div class="bg-success text-start p-1 rounded-top"><h2 class="text-white my-2 mx-3"> Inventory and Logbook Records </h2></div>
                  
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed rounded-bottom" type="button" data-bs-toggle="collapse" 
                            data-bs-target="#flush-collapseinventory" aria-expanded="false" aria-controls="flush-collapseinventory">
                            Where is the inventory page located?
                          </button>
                        </h2>
                        <div id="flush-collapseinventory" class="accordion-collapse collapse" data-bs-parent="#accordionFlush">
                          <div class="accordion-body text-secondary"> <p class="fw-bold"> To access the inventory page, 
                            you must be able to follow the steps below:</p> 
                            1. Select the option labeled "Report Generation." <br>
                            <br> 2. Upon clicking on the report generation, two subpages will be displayed. To access the inventory, 
                            simply click on the inventory. <br>
                          </div>
                        </div>
                  
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed rounded-bottom" type="button" data-bs-toggle="collapse" 
                            data-bs-target="#flush-collapseinventoryrec" aria-expanded="false" aria-controls="flush-collapseinventoryrec">
                            What information is included in the inventory records?
                          </button>
                        </h2>
                        <div id="flush-collapseinventoryrec" class="accordion-collapse collapse" data-bs-parent="#accordionFlush">
                          <div class="accordion-body text-secondary"> Inventory records consist of published and unpublished materials, 
                            as well as borrowed and returned materials, wherein, when clicked, all the materials were in one place,
                            together with their accession numbers, allowing for a quick assessment of the total quantity of materials present. 
                            Books that were borrowed and then returned were also included in the count on their designated page.  
                          </div>
                        </div>
                  
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed rounded-bottom" type="button" data-bs-toggle="collapse" 
                            data-bs-target="#flush-collapselogbook" aria-expanded="false" aria-controls="flush-collapselogbook">
                            What are logbook records for?
                          </button>
                        </h2>
                        <div id="flush-collapselogbook" class="accordion-collapse collapse" data-bs-parent="#accordionFlush">
                          <div class="accordion-body text-secondary"> The logbook records are for those who visit the library, including students, 
                            staff, and visitors. The process can be used in situations where there are books that are gone and the 
                            identity of the borrower is unknown. Logbook records are necessary for determining the identities of those who visited 
                            the library during that time. Additionally, it can be used for addressing other issues, such as delayed detection of 
                            damages, and so on. 
                          </div>
                        </div>
                    </div>
                  
                    <div class="accordion-item rounded-3 mt-4">
                      <div class="bg-success text-start p-1 rounded-top"><h2 class="text-white my-2 mx-3"> Troubleshooting and Support </h2></div>
                  
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed rounded-bottom" type="button" data-bs-toggle="collapse" 
                            data-bs-target="#flush-collapseerror" aria-expanded="false" aria-controls="flush-collapseerror">
                            What should I do if I encounter an error?
                          </button>
                        </h2>
                        <div id="flush-collapseerror" class="accordion-collapse collapse" data-bs-parent="#accordionFlush">
                          <div class="accordion-body text-secondary"> If the user encounters an error, they can try refreshing the webpage. 
                            If the situation persists, further troubleshooting may be necessary. To contact the developers, please provide 
                            feedback using the form provided below. 
                            [gform] 
                          </div>
                        </div>
                  
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed rounded-bottom" type="button" data-bs-toggle="collapse" 
                            data-bs-target="#flush-collapsereport" aria-expanded="false" aria-controls="flush-collapsereport">
                            How can I report a problem or suggest a feature?
                          </button>
                        </h2>
                        <div id="flush-collapsereport" class="accordion-collapse collapse" data-bs-parent="#accordionFlush">
                          <div class="accordion-body text-secondary"> In order to report a problem or suggest a feature, 
                            you may get in touch with the developers by filling out the form that is provided below and providing feedback.
                            [gform]
                          </div>
                        </div>
                    </div>
                  
                    <div class="card mt-5 rounded-5">
                        <div class="card-body text-bg-success p-0 d-flex flex-fill rounded-5">
                            <div class="row g-0 w-100">
                                <div class="col-4">
                                    <div class="p-2 m-1 mt-2 ms-4">
                                        <h3 class="fw-bold"> OTHERS </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                    <div class="accordion-item rounded-3 mt-4">
                      <div class="bg-success text-start p-1 rounded-top"><h2 class="text-white my-2 mx-3"> Contact Information </h2></div>
                  
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed rounded-bottom" type="button" data-bs-toggle="collapse" 
                            data-bs-target="#flush-collapsedev" aria-expanded="false" aria-controls="flush-collapsedev">
                            Who are the developers?
                          </button>
                        </h2>
                        <div id="flush-collapsedev" class="accordion-collapse collapse" data-bs-parent="#accordionFlush">
                            <div class="accordion-body text-secondary">
                              <div class="container">
                                <div class="row">
                                  
                                  <div class="col-sm-6">
                                    <div class="card mb-3" style="max-width: 540px;">
                                      <div class="row g-0">
                                        <div class="col-md-4">
                                          <img src="d1.jpg" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                          <div class="card-body">
                                            <h5 class="card-title fw-bold"> Pural, John Ashley </h5>
                                            <p class="card-text">
                                                <p class="card-text text-success"> Full Stack Developer </p>
                                            </p>
                                            <ul class="list-group mt-4">
                                                <li class="list-group-item"><i class="fas fa-envelope me-3"></i> johnashley@gmail.com </li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  
                                  <div class="col-sm-6">
                                    <div class="card mb-3" style="max-width: 540px;">
                                      <div class="row g-0">
                                        <div class="col-md-4">
                                          <img src="d2.jpg" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                          <div class="card-body">
                                            <h5 class="card-title fw-bold"> Laxa, Bench </h5>
                                            <p class="card-text">
                                                <p class="card-text text-success"> Full Stack Developer </p>
                                            </p>
                                            <ul class="list-group mt-4">
                                                <li class="list-group-item"><i class="fas fa-envelope me-3"></i> bench@gmail.com </li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                  
                  
                    <div class="accordion-item rounded-3 mt-4">
                      <div class="bg-success text-start p-1 rounded-top"><h2 class="text-white my-2 mx-3"> Feedback </h2></div>
                  
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed rounded-bottom" type="button" data-bs-toggle="collapse" 
                            data-bs-target="#flush-collapsefeedback" aria-expanded="false" aria-controls="flush-collapsefeedback">
                            Where can I send my feedback?
                          </button>
                        </h2>
                        <div id="flush-collapsefeedback" class="accordion-collapse collapse" data-bs-parent="#accordionFlush">
                          <div class="accordion-body text-secondary"> Kindly fill out the attached form to provide your feedback: <br>
                            [gform]
                          </div>
                        </div>
                    </div>
                  
                  
                  
                  </div>
                                      
            </main> 



            <a href="#" class="theme-toggle">
                <i class="far fa-sun"></i>
                <i class="far fa-moon"></i>
            </a>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-2">
                                <a href="https://lu.edu.ph" class="text-muted">
                                    <strong>Laguna University 2024</strong>
                                </a>
                                | DigiLibMS 1.0.0
                            </p>
                        </div>
                        <div class="col-6 text-end">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted">About</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="help.html" class="text-muted">Help</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://elibrary.lu.edu.ph" class="text-success"><strong>Digital
                                            Library</strong></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            
        </div>
    </div>
    





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script src="script.js"></script>
</body>

</html>