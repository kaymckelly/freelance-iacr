<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>
    <meta property="og:title" content="<?php echo $META['shortName'];?> affiliated events"/>
    <meta name="twitter:title" content="<?php echo $META['shortName'];?> affiliated events"/>

    <title>
      <?php echo $META['shortName'];?> Affiliated Events
    </title>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

    <main class="container p-4">
      <h2 class="indPageTitle">Call for Affiliated Events</h2>
      <p>
        IACR is soliciting for affiliated events to be held in
        conjunction with <?php echo $META['shortName'];?> on
        <span class="editMe">Saturday, August 15, and/or Sunday, August 16</span>.
        Each such event is expected to provide a forum discussing a
        specific topic of the broad cryptographic world (theory, practice,
        implementation, standardizations, etc.). The format of the event
        (e.g., workshop, tutorial, etc.) is up to the organizers.
      </p>

     <h3 class="pageSubtitle">
       Affiliated Events
     </h3>
      <p>
        Affiliated events can be 1-2 days long.
        Proposals for events should be submitted by email to the workshop
        chair at <span class="editMe">***insert email address of affiliated workshops person***
        by January 31st, 2020 (23:59 UTC) </span>.
      </p>
      <p>
	The workshop organizers will provide for each event:
      </p>
      <ul>
        <li>Conference room with a projector</li>
        <li>Coffee breaks (lunch will be provided at the attendees’ expense at UCSB food services)</li>
        <li>Internet access</li>
        <li>Registration services (registration desk, nametags, etc.)</li>
      </ul>

      <h3 class="pageSubtitle">
        Information to Submitters
      </h3>
      <p>
        The organization of an affiliated event is supposed to be
        relatively easy.  The entire registration process as well as
        the local organization is done by the IACR (via
        the general and workshop
        chairs).  The proposal submitters need to identify a topic and
        decide on the format, and upon acceptance coordinate the
        program/speakers.
      </p>
      <p>
        The registration fee for attendees of affiliated events will be charged
        via the registration process and will cover the incurred costs for the
        location and equipment.  Being registered for a given day of workshop
        enables a participant to attend any of the workshops of that particular
        day.
      </p>
      <p>
	Any additional costs (for example, costs of the program,
	reimbursements to invited speakers, or printing proceedings)
	fall into the responsibility of the individual event
	organizers.
      </p>
      <p>
        The organizers of the accepted events are expected to maintain an
        updated website (which will be linked from the <?php echo
        $META['shortName'];?> website), containing all relevant information for
        participants.
      </p>

      <h3 class="pageSubtitle">
        Submission Format for Affiliated Event Proposals
      </h3>
      <p>
        Proposals for affiliated events should include the following information
        in this order:
      </p>
      <ol>
        <li>Name (and possible acronym) of the event</li>
        <li>Names and contact information of the organizers</li>
        <li>Length of event (1-2 days); if 1 day, indicate flexibility for dates</li>
        <li>A proposed format (workshop with submitted/invited talks, tutorial, panel, etc.) and potential speakers (if applicable, not complete, and no commitment)</li>
        <li>Abstract summarizing the proposed event and its justification</li>
        <li>In the case of a submission process:</li>
        <ul>
          <li>Potential committee members</li>
          <li>A draft of the relevant call (including expected dates such as submission deadline, notification, etc.)</li>
        </ul>
        <li>Estimated number of attendees total and an expected number of student attendees</li>
        <li>List of specific potential attendees (not complete, and no commitment) – This will help coordinate timing of events that might overlap in audience</li>
        <li>A one-paragraph biographical sketch for each organizer, describing relevant qualifications, including research and conference/workshop organizing experience</li>
        <li>Funding sources that may be used (and for what purposes)</li>
        <li>Information of previous similar events (incl. organizational information such as attendance number), if applicable</li>
        <li>Link to draft website (if exists)</li>
      </ol>
      <p>
        A file (preferably in PDF format) containing all the above
        information should be sent to
<span class="editMe">insert email address of workshops chair</span>.
        by the submission deadline.
      </p>

      <div class="row mt-4">
        <div class="offset-lg-2 col-lg-8">
          <article class="customCard">
            <h4 class="customCardHeader">
              Important Dates
            </h4>
            <div class="customCardRow row">
              <h6 class="dateTitle col-6 col-md-5">
                <span class="editMe">January 31, 2020</span>
              </h6>
              <p class="col-6 col-md-7">
                Submission deadline for proposals
              </p>
            </div>
            <div class="customCardRow row">
              <h6 class="dateTitle col-6 col-md-5">
                <span class="editMe">February 20, 2020</span>
              </h6>
              <p class="col-6 col-md-7">
                Notification of decision
              </p>
            </div>
          </article>
        </div>
      </div>

      <h3 class="pageSubtitle">
        Proposal Evaluation Criteria
      </h3>
      <p>
        Given the limited amount of conference rooms available, events
        will be selected based on their novelty, importance, and
        interest that they may have in the cryptographic
        community.  The agreement of leading members of the
        cryptographic community to engage with the event (as
        speakers or committee members) will be taken into account.
      </p>
      <div class="row mt-4">
        <div class="offset-lg-2 col-lg-8">
          <article class="customCard">
            <h4 class="customCardHeader">
              For any questions please contact the workshop chair:
            </h4>
            <span class="editMe">
              <address class="text-center">
              Carmit Hazay<br>
              Bar-Ilan University<br/>
              Israel<br/>
              <tt>crypto2020workshopchair@gmail.com</tt>
              </address>
            </span>
          </article>
        </div>
      </div>
    </main>

  <?php include "includes/footer.php"; ?>
  </body>
</html>
