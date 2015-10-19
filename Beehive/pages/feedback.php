<link rel="stylesheet" type="text/css" href="/wp-content/themes/Beehive/css/feedback.css">
<link rel="stylesheet" type="text/css" href="/wp-content/themes/Beehive/css/animate.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<div class="page-wrapper">
  <div class="top-page-container">
    <div class="top-page-container-inner">
      <div class="background-layer">
        <div class="top-layer">
          <div class="top-page-container-inner-content">
            <h1>Feedback</h1>
            <small>Jetzt oder nie . . .</small>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container feedback-wrapper">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6 feedback-inner" style="border-right: 1px solid #dfdfdf;">
        <form method="post" action="?page=feedback">
          <fieldset>
            <legend>Gib uns ein Feedback!</legend>
            <label class="form-label">Name</label>
            <input type="text" class="form-control">
            <label class="form-label">Email Adresse</label>
            <input type="text" name="absenderEmail" class="form-control">
            <label class="form-label">Nachricht</label>
            <textarea class="form-control" rows="7" style="resize:none"></textarea>
            <br>
            <input type="submit" class="btn pull-right btn-success" value="Senden">
            <input type="reset" class="btn pull-left btn-default" value="Felder L&ouml;schen">
          </fieldset>
        </form>
      </div>
      <div class="col-xs-12 bla">
        <i class="fa fa-chevron-down special animated bounce"></i>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6" style="padding-left:25px">
        <div class="col-xs-12 moremore-info">
          Click me if not ... then not<i class="fa fa-plus plus"></i>
        </div>
        <div class="more-info">

        <h4>Schreiben Sie uns ein Feedback, machen Sie uns besser!</h4>
        <p>
          Haben Sie Fragen oder Verbesserungsvorschläge jeglicher Art?
          Haben Sie Ideen für die Umsetzung? Folgen Sie unserem Ereignis-Feed und wollen uns auf etwas hinweisen?
          Oder gefällt Ihnen einfach nur die Webseite? <br><br><b>Ganz egal.</b> Schreiben Sie uns und helfen Sie mit, die Welt ein kleines Stückchen besser zu gestalten.
          <br><br><b>Wir freuen uns auf Ihre Feedbacks!</b>
        </p>
      </div>
      </div>
    </div>
  </div>
</div>
<script src="/wp-content/themes/Beehive/scripts/unnedigerDu.js"></script>
<script src="/wp-content/themes/Beehive/scripts/mail_ueberpruefung.js" type="text/javascript"></script>
<style>
  .modal {
  text-align: center;
  }

  @media screen and (min-width: 768px) {
  .modal:before {
    display: inline-block;
    vertical-align: middle;
    content: " ";
    height: 100%;
  }
  }

  .modal-dialog {
  display: inline-block;
  text-align: left;
  vertical-align: middle;
  }
</style>

<!-- Fehler Modal -->
  <div class="modal fade" id="fModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Fehler :(</h4>
        </div>
        <div class="modal-body">
          <p>Ihre email Addresse ist ungültig!</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

  <!-- Erfolgreich Modal -->
  <div class="modal fade" id="eModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Erfolgreich</h4>
        </div>
        <div class="modal-body">
          <p>Danke für dein Feedback</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
