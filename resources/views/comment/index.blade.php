<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Comment section</title>

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/comment.css') }}" />
    <!-- Font Awesome Icons -->
    <script
      src="https://kit.fontawesome.com/15df32d772.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <section class="container">
      <h2 class="suggestion-text">Suggested Download</h2>
      <!-- Card 1 -->
      <div class="section-container">
        <div class="card-section-card-1">
          <div class="card-section sub-section">
            <img
              class="icon-image"
              src="{{ asset('images/react.png') }}"
              alt="card-1"
            />
          </div>
          <div class="card-view">
            <h2 class="sub-section-title">Seamless Reactjs Login templates</h2>
            <div class="card-base">
              <div class="card-view-details">
                <img src="{{ asset('images/view.png') }}" alt="view-icon" />
                <p class="card-view-paragraph">4.5K Views</p>
              </div>
  
              <div class="card-view-details">
                <img src="{{ asset('images/arrow.png') }}" alt="arrow-icon" />
                <p class="card-view-paragraph">1.3K Votes</p>
              </div>

              <div class="card-view-details">
                <img
                  src="{{ asset('images/download-icon.png') }}"
                  alt="download-icon"
                />
                <p class="card-view-paragraph">11.3K Downloads</p>
              </div>
            </div>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="card-section-card-1">
          <div class="card-section sub-section">
            <img
              class="icon-image"
              src="{{ asset('images/react.png') }}"
              alt="card-1"
            />
          </div>
          <div class="card-view">
            <h2 class="sub-section-title">Seamless Reactjs Login templates</h2>
            <div class="card-base">
              <div class="card-view-details">
                <img src="{{ asset('images/view.png') }}" alt="view-icon" />
                <p class="card-view-paragraph">4.5K Views</p>
              </div>
  
              <div class="card-view-details">
                <img src="{{ asset('images/arrow.png') }}" alt="arrow-icon" />
                <p class="card-view-paragraph">1.3K Votes</p>
              </div>
              
              <div class="card-view-details">
                <img
                  src="{{ asset('images/download-icon.png') }}"
                  alt="download-icon"
                />
                <p class="card-view-paragraph">11.3K Downloads</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Card 3 -->

        <div class="card-section-card-1">
          <div class="card-section sub-section">
            <img
              class="icon-image"
              src="{{ asset('images/react.png') }}"
              alt="card-1"
            />
          </div>
          <div class="card-view">
            <h2 class="sub-section-title">Seamless Reactjs Login templates</h2>
            <div class="card-base">
              <div class="card-view-details">
                <img src="{{ asset('images/view.png') }}" alt="view-icon" />
                <p class="card-view-paragraph">4.5K Views</p>
              </div>
  
              <div class="card-view-details">
                <img src="{{ asset('images/arrow.png') }}" alt="arrow-icon" />
                <p class="card-view-paragraph">1.3K Votes</p>
              </div>
              
              <div class="card-view-details">
                <img
                  src="{{ asset('images/download-icon.png') }}"
                  alt="download-icon"
                />
                <p class="card-view-paragraph">11.3K Downloads</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button><a href="#">Load more</a></button>

      <!-- LEAVE COMMENT SECTION -->
      <main>
        <div class="comment-container-heading">
          <h2>LEAVE A COMMENT</h2>
          <div class="comment-container">
            <i class="fa-solid fa-circle-user"></i>
            <p class="comment-container-paragraph">
              Your email address will not be published. Required fields are
              marked*
            </p>
          </div>
        </div>
        <form class="comment-form" action="" method="POST">
          <textarea name="" id="comment" placeholder="comment*"></textarea>
          <button type="submit" class="button-post">Post Comment</button>
        </form>
      </main>

      <article class="comment-section">
        <h1>PREVIOUS COMMENTS</h1>
        
        <div class="previous-comments-wrapper">
            <!-- first reply -->
          <div class="previous-comments">
            <i class="fa-solid fa-circle-user"></i>

            <div class="previous-comments-name">
              <p class="previous-comments-paragraph-name">
                Jane Doe <span> 20 Jun, 2022, 11:44 am</span>
              </p>
              <p class="previous-comments-paragraph">
                Thank you for creating this platform, it was a great help for
                me. would love to contribute to this project.
              </p>
              <div class="reply-button">
                <p>Reply</p>
    
                <div class="reply-button-like">
                  <img
                    class="reply-icon"
                    src="{{ asset('images/like.png') }}"
                    alt="like-button"
                  />
                  <img
                    class="reply-icon-1"
                    src="{{ asset('images/dislike.png') }}"
                    alt="dislike button"
                  />
                </div>
              </div>
            </div>
          </div>
            
            
  
          <!-- second reply -->
          <div class="previous-comments">
            <i class="fa-solid fa-circle-user"></i>

            <div class="previous-comments-name">
              <p class="previous-comments-paragraph-name">
                Jane Doe <span> 20 Jun, 2022, 11:44 am</span>
              </p>
              <p class="previous-comments-paragraph">
                Thank you for creating this platform, it was a great help for
                me. would love to contribute to this project.
              </p>
              <div class="reply-button">
                <p>Reply</p>
    
                <div class="reply-button-like">
                  <img
                    class="reply-icon"
                    src="{{ asset('images/like.png') }}"
                    alt="like-button"
                  />
                  <img
                    class="reply-icon-1"
                    src="{{ asset('images/dislike.png') }}"
                    alt="dislike button"
                  />
                </div>
              </div>
            </div>
          </div>

          <!-- third reply -->
          <div class="previous-comments">
            <i class="fa-solid fa-circle-user"></i>

            <div class="previous-comments-name">
              <p class="previous-comments-paragraph-name">
                Jane Doe <span> 20 Jun, 2022, 11:44 am</span>
              </p>
              <p class="previous-comments-paragraph">
                Thank you for creating this platform, it was a great help for
                me. would love to contribute to this project.
              </p>
              <div class="reply-button">
                <p>Reply</p>
    
                <div class="reply-button-like">
                  <img
                    class="reply-icon"
                    src="{{ asset('images/like.png') }}"
                    alt="like-button"
                  />
                  <img
                    class="reply-icon-1"
                    src="{{ asset('images/dislike.png') }}"
                    alt="dislike button"
                  />
                </div>
              </div>
            </div>
          </div>
  
          <!-- fourth reply -->
          <div class="previous-comments">
            <i class="fa-solid fa-circle-user"></i>

            <div class="previous-comments-name">
              <p class="previous-comments-paragraph-name">
                Jane Doe <span> 20 Jun, 2022, 11:44 am</span>
              </p>
              <p class="previous-comments-paragraph">
                Thank you for creating this platform, it was a great help for
                me. would love to contribute to this project.
              </p>
              <div class="reply-button">
                <p>Reply</p>
    
                <div class="reply-button-like">
                  <img
                    class="reply-icon"
                    src="{{ asset('images/like.png') }}"
                    alt="like-button"
                  />
                  <img
                    class="reply-icon-1"
                    src="{{ asset('images/dislike.png') }}"
                    alt="dislike button"
                  />
                </div>
              </div>
            </div>
          </div>

          <!-- fifth reply -->
          <div class="previous-comments">
            <i class="fa-solid fa-circle-user"></i>

            <div class="previous-comments-name">
              <p class="previous-comments-paragraph-name">
                Jane Doe <span> 20 Jun, 2022, 11:44 am</span>
              </p>
              <p class="previous-comments-paragraph">
                Thank you for creating this platform, it was a great help for
                me. would love to contribute to this project.
              </p>
              <div class="reply-button">
                <p>Reply</p>
    
                <div class="reply-button-like">
                  <img
                    class="reply-icon"
                    src="{{ asset('images/like.png') }}"
                    alt="like-button"
                  />
                  <img
                    class="reply-icon-1"
                    src="{{ asset('images/dislike.png') }}"
                    alt="dislike button"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </article>
    </section>
  </body>
</html>
