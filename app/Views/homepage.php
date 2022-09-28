<!DOCTYPE html>
<html lang="en">
<?php $page="homepage"; ?>

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="<?php echo base_url();?>/assets/img/fav.png" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/homepage.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/commanstyle.css">
  <!-- <link rel="stylesheet" href="<?php echo base_url();?>/assets1/css/lightslider-new.css"> -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <title>
    <?php echo $title;?>
  </title>
  <meta name="description" content="<?php echo $meta_desc;?>" />
  <style>
    ::-webkit-scrollbar {
      width: 8px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
      background: #f1f1f1;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: #888;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: #555;
    }

    .profile-pic {
      width: 100px !important;
      height: 100px;
      box-shadow: 0px 4px 8px 0px #BDBDBD;
    }

    .owl-carousel .owl-nav button.owl-next,
    .owl-carousel .owl-nav button.owl-prev {
      background: 0 0;
      color: #1E88E5 !important;
      border: none;
      padding: 5px 20px !important;
      font: inherit;
      font-size: 50px !important;
    }

    .owl-carousel .owl-nav button.owl-next:hover,
    .owl-carousel .owl-nav button.owl-prev:hover {
      color: #0D47A1 !important;
      background-color: transparent !important;
    }

    .owl-dots {
      display: none;
    }

    button:focus {
      -moz-box-shadow: none !important;
      -webkit-box-shadow: none !important;
      box-shadow: none !important;
      outline-width: 0;
    }

    .item {
      display: none;
    }

    .next {
      display: block !important;
      position: relative;
      transform: scale(0.8);
      transition-duration: 0.3s;
      opacity: 0.6;
    }

    .prev {
      display: block !important;
      position: relative;
      transform: scale(0.8);
      transition-duration: 0.3s;
      opacity: 0.6;
    }

    .item.show {
      display: block;
      transition-duration: 0.4s;
    }

    @media screen and (max-width: 999px) {

      .next,
      .prev {
        transform: scale(1);
        opacity: 1;
      }

      .item {
        display: block !important;
      }
    }
  </style>
</head>

<body>
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="bootstrap" viewBox="0 0 118 94">
      <title>Bootstrap</title>
      <path fill-rule="evenodd" clip-rule="evenodd"
        d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z">
      </path>
    </symbol>
    <symbol id="home" viewBox="0 0 16 16">
      <path
        d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z">
      </path>
    </symbol>
    <symbol id="speedometer2" viewBox="0 0 16 16">
      <path
        d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z">
      </path>
      <path fill-rule="evenodd"
        d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z">
      </path>
    </symbol>
    <symbol id="table" viewBox="0 0 16 16">
      <path
        d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z">
      </path>
    </symbol>
    <symbol id="people-circle" viewBox="0 0 16 16">
      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
      <path fill-rule="evenodd"
        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z">
      </path>
    </symbol>
    <symbol id="grid" viewBox="0 0 16 16">
      <path
        d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z">
      </path>
    </symbol>
    <symbol id="collection" viewBox="0 0 16 16">
      <path
        d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z">
      </path>
    </symbol>
    <symbol id="calendar3" viewBox="0 0 16 16">
      <path
        d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z">
      </path>
      <path
        d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z">
      </path>
    </symbol>
    <symbol id="chat-quote-fill" viewBox="0 0 16 16">
      <path
        d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM7.194 6.766a1.688 1.688 0 0 0-.227-.272 1.467 1.467 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.461 2.461 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.466 2.466 0 0 0-.228-.4 1.686 1.686 0 0 0-.227-.273 1.466 1.466 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z">
      </path>
    </symbol>
    <symbol id="cpu-fill" viewBox="0 0 16 16">
      <path d="M6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"></path>
      <path
        d="M5.5.5a.5.5 0 0 0-1 0V2A2.5 2.5 0 0 0 2 4.5H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2A2.5 2.5 0 0 0 4.5 14v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14a2.5 2.5 0 0 0 2.5-2.5h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14A2.5 2.5 0 0 0 11.5 2V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5zm1 4.5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3A1.5 1.5 0 0 1 6.5 5z">
      </path>
    </symbol>
    <symbol id="gear-fill" viewBox="0 0 16 16">
      <path
        d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z">
      </path>
    </symbol>
    <symbol id="speedometer" viewBox="0 0 16 16">
      <path
        d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z">
      </path>
      <path fill-rule="evenodd"
        d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z">
      </path>
    </symbol>
    <symbol id="toggles2" viewBox="0 0 16 16">
      <path d="M9.465 10H12a2 2 0 1 1 0 4H9.465c.34-.588.535-1.271.535-2 0-.729-.195-1.412-.535-2z"></path>
      <path
        d="M6 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm.535-10a3.975 3.975 0 0 1-.409-1H4a1 1 0 0 1 0-2h2.126c.091-.355.23-.69.41-1H4a2 2 0 1 0 0 4h2.535z">
      </path>
      <path d="M14 4a4 4 0 1 1-8 0 4 4 0 0 1 8 0z"></path>
    </symbol>
    <symbol id="tools" viewBox="0 0 16 16">
      <path
        d="M1 0L0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z">
      </path>
    </symbol>
    <symbol id="chevron-right" viewBox="0 0 16 16">
      <path fill-rule="evenodd"
        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
      </path>
    </symbol>
    <symbol id="geo-fill" viewBox="0 0 16 16">
      <path fill-rule="evenodd"
        d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z">
      </path>
    </symbol>
  </svg>
  <div class="vt-side-nav" id="vtMenu">
    <ul class="vt-nav">
      <li class="vt-logo">
        <a href="<?php echo base_url();?>">
          <img src="<?php echo base_url();?>/assets/img/HomePage_4-30.png" alt="" />
        </a>
      </li>
      <!-- <li>
                <a href="#">
                    <svg class="bi" width="24" height="24" role="img" aria-label="Home">
                        <use xlink:href="#home"></use>
                    </svg>
                    Home
                </a>
            </li> -->
      <li class="vt-logo1 <?php if($page=='homepage'){echo 'activemenu';}?>">
        <a href="#">
          <img src="<?php echo base_url();?>/assets/img/HomePage_4-31.png" alt="" />
          <p>Who We Are</p>
        </a>
      </li>
      <li class="vt-logo1 <?php if($page=='services'){echo 'activemenu';}?>">
        <a href="<?php echo base_url('services');?>">

          <?php if($page=='services'){?>
          <img src="<?php echo base_url();?>/assets/img/HomePage_selected.png" alt="" />
          <?php }else{?>
          <img src="<?php echo base_url();?>/assets/img/HomePage_4-32.png" alt="" />
          <?php }?>

          <p>Services We Specialise In</p>
        </a>
      </li>
      <li class="vt-logo1">
        <a href="#">
          <img src="<?php echo base_url();?>/assets/img/HomePage_4-33.png" alt="" />
          <p>Why Work With Us</p>
        </a>
      </li>
      <!-- <li class="vt-logo1 dropend">
                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url();?>/assets/img/HomePage_4-34.png" alt="" />
                    <p>Our Success Stories</p>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                </ul>
            </li> -->
      <li class="vt-logo1 <?php if($page=='blog-list'){echo 'activemenu';}?>">
        <a href="<?php echo base_url('blog-list');?>">
          <img src="<?php echo base_url();?>/assets/img/HomePage_4-35.png" alt="" />
          <p>Knowledge Centre</p>
        </a>

      </li>
      <li class="vt-logo1">
        <a href="#">
          <img src="<?php echo base_url();?>/assets/img/HomePage_4-36.png" alt="" />
          <p>Join Our Team</p>
        </a>
      </li>
      <li class="vt-logo1">
        <a href="#">
          <img src="<?php echo base_url();?>/assets/img/HomePage_4-37.png" alt="" />
          <p>Contact Us</p>
        </a>
      </li>
    </ul>
    <div class="mobile-nav">
      <a href="#" onclick="myFunction()">
        <img src="<?php echo base_url();?>/assets/img/HomePage_4-30.png" alt="" class="vt-logo" />
      </a>
      <!-- <button type="button" class="menu-icon" onclick="myFunction()">
                <span></span>
                <span></span>
                <span></span>
            </button> -->
      <button class="close-menu" onclick="myFunction()">
        &times;
      </button>
    </div>
  </div>




  <main class="vt-main">
    <section class="vt-home-banner">
      <div class="banner-bg"></div>
      <div class="banner-content">
        <div class="left-side">
          <div class="content">
            <img src="<?php echo base_url();?>/assets/img/HomePage_4-06.png" alt="img" />
            <p>Your success lies in creating a learning culture that fosters productivity, performance and profit in
              your organization.</p>
          </div>
        </div>
        <div class="center">
          <img src="<?php echo base_url();?>/assets/img/HomePage-12.png" alt="img" />
        </div>
        <div class="right-side">
          <div class="content">
            <img src="<?php echo base_url();?>/assets/img/HomePage_4-07.png" alt="img" />
            <p>our goal is to empower you with the right strategy, technology and measurability, and craft learning
              experiences that help you meet succeed</p>
          </div>
        </div>
      </div>
    </section>
    <section class="vt-home-yellow">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <img src="<?php echo base_url();?>/assets/img/HomePage_4-10.png" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="vt-home-perp"><img src="<?php echo base_url();?>/assets/img/HomePage-07.png" alt=""
          class="vt-home-image2">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-4">
              <div class="vt-home-bus-cont">Your business is <span>unique,</span><br> and so are your business
                challenges <br>and learning needs.
              </div>
            </div>
            <div class="col-6"></div>
          </div>
        </div>

      </div>
    </section>
    <!-- <section class="vt-home-under-p">            
            <div class="image-under-c"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <h2>we understand this</h2>
                        <p>With our 90+ year of collective team experience and expertise of working with latest technologies and trands, we deliver the most appropriate and impactful solution-specific to your goals.</p>
                    </div>
                    <div class="col-2">
                      
                    </div>
                  </div>
            </div>            
        </section> -->
    <section>
      <div class="vt-ban-img">
        <img src="assets/img/HomePage-08.png" alt="" />
        <div class="container">
          <div class="row vt-headding-h2">
            <div class="col-10 col-md-10 col-sm-12">
              <h2>we understand this</h2>
              <p>With our 90+ year of collective team experience and expertise of working with latest technologies and
                trands, we deliver the most appropriate and impactful solution-specific to your goals.</p>
            </div>
            <div class="col-2 col-md-2 col-sm-2">

            </div>
          </div>
          <div class="row justify-content-center vt-headding-h22">
            <div class="col-6">
              <img src="assets/img/HomePage_4-26.png" alt="" class="img-fluid" />
              <div>we do it end-to-end</div>
            </div>
            <div class="col-4">

            </div>
          </div>
        </div>
      </div>

    </section>
    <section class="vt-our-item vt-no">
      <div class="vt-our-c"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-3">
            <div class="vt-our-border">
              <img src="<?php echo base_url();?>/assets/img/1.png" class="vt-our-image" alt="" />
            </div>
          </div>
          <div class="col-md-3 col-sm-3">
            <div class="vt-our-border">
              <img src="<?php echo base_url();?>/assets/img/2.png" class="vt-our-image" alt="" />
            </div>
          </div>
          <div class="col-md-3 col-sm-3">
            <div class="vt-our-border">
              <img src="<?php echo base_url();?>/assets/img/3.png" class="vt-our-image" alt="" />
            </div>
          </div>
          <div class="col-md-3 col-sm-3">
            <div class="vt-our-border">
              <img src="<?php echo base_url();?>/assets/img/4.png" class="vt-our-image" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col">

          </div>
          <div class="col-8">
            <div class="vt-span   text-center">
              <p>
                We curate content that is best suited for your learners-that talks their language, matches their
                proficiency and connects with their minds.
              </p>
            </div>
          </div>
          <div class="col">

          </div>

        </div>
      </div>
    </section>
    <section class="vt-col-testimonial">
      <div class="container">
        <div class="row">
          <div class="col-md-4" style="position: relative;">
            <img src="<?php echo base_url();?>/assets/img/HomePage_4-22.png" alt="" class="img-fluid" />
            <div class="centered"><span id="value"></span>+</div>
            <p class="text-center vt-p-18">Learning Hours</p>
          </div>
          <div class="col-md-4" style="position: relative;"><img
              src="<?php echo base_url();?>/assets/img/HomePage_4-23.png" alt="" class="img-fluid" />
            <div class="centered"><span id="value2"></span>+</div>
            <p class="text-center vt-p-18">Happy Customers</p>
          </div>
          <div class="col-md-4" style="position: relative;"><img
              src="<?php echo base_url();?>/assets/img/HomePage_4-24.png" alt="" class="img-fluid" />
            <div class="centered"><span id="value3"></span>+</div>
            <p class="text-center vt-p-18">Appreciations and<br>Recognitions</p>
          </div>
        </div>
      </div>


    </section>
    <style>
      #more1 {
        display: none;
      }

      #more2 {
        display: none;
      }

      #more3 {
        display: none;
      }

      #more4 {
        display: none;
      }

      #more5 {
        display: none;
      }
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <section>
      <div class="container">

        <div class="owl-carousel owl-theme">
          <div class="item first prev">
            <div class="shedow">
              <div class="card shadow-sm h-100">
                <div class="text-center"><br>

                  <div class="row justify-content-center">
                    <img class="rounded-circle shadow-1-strong mb-4"
                      src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp" alt="avatar"
                      style="width: 150px;" />
                  </div>
                  <p>1Zenobia Sethna<br><small>VP & Head of eLarning Imarticus Learning</small></p>
                </div>
                <div class="card-body">
                  <p class="card-text">We've been working with Ventura Technologies for more than 2 years. With each new
                    project, we've been impressed with their creatives efforts. We also rely on their professional
                    project management Overall, Ventura provides Tyco with a good<span id="dots1">...</span><span
                      id="more1">product at a good value. We are happy to be working with them.</span></p>
                  <a href="javascript:void(0)" onclick="myFunction1()" class="card-link float-end" id="myBtn1">Read
                    more</a>
                </div>
              </div>
            </div>
          </div>
          <div class="item show">
            <div class="shedow">
              <div class="card shadow-sm h-100">
                <div class="text-center"><br>
                  <div class="row justify-content-center">
                    <img class="rounded-circle shadow-1-strong mb-4"
                      src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" alt="avatar"
                      style="width: 150px;" />
                  </div>
                  <p>2Zenobia Sethna<br><small>VP & Head of eLarning Imarticus Learning</small></p>
                </div>
                <div class="card-body">
                  <p class="card-text">We are extremely impressed with Ventura Technologies instructional designing
                    approach, the quality of the graphics and the project management process. The overall experience of
                    working with them has been impressive.</p>

                </div>
              </div>
            </div>
          </div>
          <div class="item next">
            <div class="shedow">
              <div class="card shadow-sm">
                <div class="text-center"><br>
                  <div class="row justify-content-center">
                    <img class="rounded-circle shadow-1-strong mb-4"
                      src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" alt="avatar"
                      style="width: 150px;" />
                  </div>
                  <p>3Zenobia Sethna<br><small>VP & Head of eLarning Imarticus Learning</small></p>
                </div>
                <div class="card-body">
                  <p class="card-text">It was a total pleasure working with Ventura Technologies based in Pune. We found the project team who worked with us excellent, they worked with us as they are in our office, we did not feel the distance. The team is truly professional<span id="dots2">...</span><span id="more2"><br>
                                    The astounded aspect was at the quality of the work, the level of contact, the value for money, the genuineness of Aparna and her team in understanding the instructional methodology and bringing an efficient Content with great engagement capabilities.</span></p>
                                    <a href="javascript:void(0)" onclick="myFunction2()" class="card-link float-end" id="myBtn2" style="text-decoration: none;">Read more</a>
                </div>
              </div>
            </div>
          </div>
          <div class="item next">
            <div class="shedow">
              <div class="card shadow-sm">
                <div class="text-center"><br>
                  <div class="row justify-content-center">
                    <img class="rounded-circle shadow-1-strong mb-4"
                      src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" alt="avatar"
                      style="width: 150px;" />
                  </div>
                  <p>4Zenobia Sethna<br><small>VP & Head of eLarning Imarticus Learning</small></p>
                </div>
                <div class="card-body">
                  <p class="card-text">I was really impressed with the high level of customer service by the Ventura team. The courseware developed is so much in match with the best in breed offerings - there is no doubt that they see your business in terms of<span id="dots3">...</span><span id="more3">building a relationship, rather than managing a transaction. <br> I have already recommended Ventura Technologies to all my clients and will be starting to work on our next projects shortly.</span></p>
                    <a href="javascript:void(0)" onclick="myFunction3()" class="card-link float-end" id="myBtn3" style="text-decoration: none;">Read more</a>
                </div>
              </div>
            </div>
          </div>
          <div class="item next">
            <div class="shedow">
              <div class="card shadow-sm">
                <div class="text-center"><br>
                  <div class="row justify-content-center">
                    <img class="rounded-circle shadow-1-strong mb-4"
                      src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" alt="avatar"
                      style="width: 150px;" />
                  </div>
                  <p>5Zenobia Sethna<br><small>VP & Head of eLarning Imarticus Learning</small></p>
                </div>
                <div class="card-body">
                  <p class="card-text">We are highly impressed with the responsiveness that Ventura team shows in any project. They are not just the doers but the thinkers too. They gave a consultative approach to the project and worked as a core part of the team.<span id="dots4">...</span><span id="more4"> Very dependable and reliable!<br>They made all the efforts to meet the project expectations and even went out of the way to achieve what was needed.<br> We have been working with Ventura team since a year now and are absolutely happy with the team’s commitment towards their work.</span></p>
                                    <a href="javascript:void(0)" onclick="myFunction4()" class="card-link float-end" id="myBtn4" style="text-decoration: none;">Read more</a>
                </div>
              </div>
            </div>
          </div>
          <div class="item next">
            <div class="shedow">
              <div class="card shadow-sm">
                <div class="text-center"><br>
                  <div class="row justify-content-center">
                    <img class="rounded-circle shadow-1-strong mb-4"
                      src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" alt="avatar"
                      style="width: 150px;" />
                  </div>
                  <p>6Zenobia Sethna<br><small>VP & Head of eLarning Imarticus Learning</small></p>
                </div>
                <div class="card-body">
                  <p class="card-text">Keep up the good work and continue to focus on good customers! The focus is ALWAYS forward!</p>
                </div>
              </div>
            </div>
          </div>
          <div class="item last">
            <div class="shedow">
              <div class="card shadow-sm">
                <div class="text-center"><br>
                  <div class="row justify-content-center">
                    <img class="rounded-circle shadow-1-strong mb-4"
                      src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" alt="avatar"
                      style="width: 150px;" />
                  </div>
                  <p>7Zenobia Sethna<br><small>VP & Head of eLarning Imarticus Learning</small></p>
                </div>
                <div class="card-body">
                  <p class="card-text">Congratulations Ventura team for the great success on this project :) You have always been client centric and provided us with quality output. We thank you for all your dedication and effort and wish you all the success in everything you do.<span id="dots5">...</span><span id="more5"><br>Please convey my special thanks to your CE team. They have done great work in the Amazon project so far.</span></p>
                                    <a href="javascript:void(0)" onclick="myFunction5()" class="card-link float-end" id="myBtn5" style="text-decoration: none;">Read more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <script type='text/javascript'>$(document).ready(function () {

          $('.owl-carousel').owlCarousel({
            mouseDrag: false,
            loop: true,
            margin: 2,
            nav: true,
            responsive: {
              0: {
                items: 1
              },
              600: {
                items: 1
              },
              1000: {
                items: 3
              }
            }
          });

          $('.owl-prev').click(function () {
            $active = $('.owl-item .item.show');
            $('.owl-item .item.show').removeClass('show');
            $('.owl-item .item').removeClass('next');
            $('.owl-item .item').removeClass('prev');
            $active.addClass('next');
            if ($active.is('.first')) {
              $('.owl-item .last').addClass('show');
              $('.first').addClass('next');
              $('.owl-item .last').parent().prev().children('.item').addClass('prev');
            }
            else {
              $active.parent().prev().children('.item').addClass('show');
              if ($active.parent().prev().children('.item').is('.first')) {
                $('.owl-item .last').addClass('prev');
              }
              else {
                $('.owl-item .show').parent().prev().children('.item').addClass('prev');
              }
            }
          });

          $('.owl-next').click(function () {
            $active = $('.owl-item .item.show');
            $('.owl-item .item.show').removeClass('show');
            $('.owl-item .item').removeClass('next');
            $('.owl-item .item').removeClass('prev');
            $active.addClass('prev');
            if ($active.is('.last')) {
              $('.owl-item .first').addClass('show');
              $('.owl-item .first').parent().next().children('.item').addClass('prev');
            }
            else {
              $active.parent().next().children('.item').addClass('show');
              if ($active.parent().next().children('.item').is('.last')) {
                $('.owl-item .first').addClass('next');
              }
              else {
                $('.owl-item .show').parent().next().children('.item').addClass('next');
              }
            }
          });

        });</script>
    </section>
    <section class="vt-pink-color">
      <div class="container text-center">
        <div class="row">
          <div class="col">
            <p class="pk"><span class="spanpk">Collaborate</span> to create a measurable impact through<span
                class="spanpk">learning</span></p>
            <div class="wrapper1">
              <a class="cta" href="<?php echo base_url('/enquiry'); ?>">
                <span>Connect Now</span>
                <span>
                  <svg width="30px" height="25px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <path class="one"
                        d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                        fill="#FFFFFF"></path>
                      <path class="two"
                        d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                        fill="#FFFFFF"></path>
                      <path class="three"
                        d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                        fill="#FFFFFF"></path>
                    </g>
                  </svg>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="vt-footer">

      <div class="container">
        <footer class="justify-content-between align-items-center py-3">
          <div class="row">
            <div class="col-md-4">
              <div class="card text-bg-dark">
                <div class="card-body">
                  <h5 class="card-title">VENTURA INDIA</h5>

                  <p class="card-text"><i class="fa fa-lg fa-map-marker" aria-hidden="true">&nbsp;</i>Ventura Learning
                    Technologies LLP,<br>
                    OFFICE 401, City Avenue, Next To Hotel Sayaji, Wakad, <br>Pune - 411057
                    INDIA</p>
                  <p><i class="fa fa-lg fa-mobile" aria-hidden="true">&nbsp;</i>
                    +91 755-9398-411
                  </p>
                  <p><i class="fa fa-lg fa-envelope" aria-hidden="true">&nbsp;</i>
                    connect@venturatechnologies.in
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card text-bg-dark">
                <div class="card-body">
                  <h5 class="card-title">QUICK LINKS</h5>


                  <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="text-decoration-none">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="text-decoration-none">Features</a></li>

                    <li class="nav-item mb-2"><a href="#" class="text-decoration-none">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="text-decoration-none">About</a></li>
                  </ul>
                </div>
              </div>
              <div class="button-block">
                <div class="social"><a href="https://www.facebook.com/venturapune/" target="_blank"> <i
                      class="fa fa-facebook"></i></a></div>
                <div class="social"><a href="https://in.linkedin.com/company/ventura_technologies" target="_blank"> <i
                      class="fa fa-linkedin"></i></a></div>
                <div class="social"><a href="https://www.youtube.com/channel/UCg90U3cuSLJnqjJun4YE0nQ" target="_blank">
                    <i class="fa fa-youtube"></i></a></div>
                <div class="social"><a
                    href="https://api.whatsapp.com/send?phone=918007773153&amp;text=Hello%20Ventura%20Team,%20Please%20let%20me%20know%20more%20about%20your%20offerings."
                    target="_blank"> <i class="fa fa-whatsapp"></i></a></div>
              </div>
            </div>

            <div class="col-md-4">

              sasasas
            </div>

          </div>





        </footer>

      </div>
      <div class="vt-footer-res">
        <p class="text-center">copyright &copy; 2022. All Rights Reserved</p>
      </div>


    </section>

  </main>



  <script src="<?php echo base_url();?>/assets/js/1lightslider-new.js"></script>
  <script>
    function animateValue(id, start, end, duration) {
      if (start === end) return;
      var range = end - start;
      var current = start;
      var increment = end > start ? 1 : -1;
      var stepTime = Math.abs(Math.floor(duration / range));
      var obj = document.getElementById(id);
      var timer = setInterval(function () {
        current += increment;
        obj.innerHTML = current;
        if (current == end) {
          clearInterval(timer);
        }
      }, stepTime);
    }
    animateValue("value", 115, 210, 3000);
    animateValue("value2", 25, 75, 3000);
    animateValue("value3", 55, 102, 3000);

  </script>
  <script>


    function myFunction() {
      var element = document.getElementById("vtMenu");
      element.classList.toggle("open");
    }
    window.addEventListener('click', function (e) {
      if (document.getElementById('vtMenu').contains(e.target)) {
        // Clicked in box
      } else {
        var element = document.getElementById("vtMenu");
        element.classList.remove("open");
      }
    });
  </script>


  <script>
    function myFunction1() {
      var dots1 = document.getElementById("dots1");
      var moreText1 = document.getElementById("more1");
      var btnText1 = document.getElementById("myBtn1");

      if (dots1.style.display === "none") {
        dots1.style.display = "inline";
        btnText1.innerHTML = "Read more";
        moreText1.style.display = "none";
      } else {
        dots1.style.display = "none";
        btnText1.innerHTML = "Read less";
        moreText1.style.display = "inline";
      }


    }
    function myFunction2() {
      var dots2 = document.getElementById("dots2");
      var moreText2 = document.getElementById("more2");
      var btnText2 = document.getElementById("myBtn2");
      if (dots2.style.display === "none") {
        dots2.style.display = "inline";
        btnText2.innerHTML = "Read more";
        moreText2.style.display = "none";
      } else {
        dots2.style.display = "none";
        btnText2.innerHTML = "Read less";
        moreText2.style.display = "inline";
      }
    }
    function myFunction3() {
        $active = $('.owl-item .item.show');
        
      var dots3 = document.getElementById("dots3");
      var moreText3 = document.getElementById("more3");
      var btnText3 = document.getElementById("myBtn3");
      if (dots3.style.display === "none") {
        dots3.style.display = "inline";
        btnText3.innerHTML = "Read more";
        moreText3.style.display = "none";
        $active.addClass('pre');
      } else {
        dots3.style.display = "none";
        btnText3.innerHTML = "Read less";
        moreText3.style.display = "inline";
        $active.addClass('next');
      }
    }
    function myFunction4() {
      var dots4 = document.getElementById("dots4");
      var moreText4 = document.getElementById("more4");
      var btnText4 = document.getElementById("myBtn4");
      if (dots4.style.display === "none") {
        dots4.style.display = "inline";
        btnText4.innerHTML = "Read more";
        moreText4.style.display = "none";
      } else {
        dots4.style.display = "none";
        btnText4.innerHTML = "Read less";
        moreText4.style.display = "inline";
      }
    }
    function myFunction5() {
      var dots5 = document.getElementById("dots5");
      var moreText5 = document.getElementById("more5");
      var btnText5 = document.getElementById("myBtn5");
      if (dots5.style.display === "none") {
        dots5.style.display = "inline";
        btnText5.innerHTML = "Read more";
        moreText5.style.display = "none";
      } else {
        dots5.style.display = "none";
        btnText5.innerHTML = "Read less";
        moreText5.style.display = "inline";
      }
    }
  </script>


</body>

</html>