<div class="white-box">
<h3 class="box-title m-b-0">Timelines Pengalaman Personel</h3>
<hr>
<section class="cd-horizontal-timeline">
    <div class="timeline">
        <div class="events-wrapper">
            <div class="events">
                <ol>
                    <li>
                        <a href="#0" data-date="16/01/2014" class="selected">16 Jan</a>
                    </li>
                    <li>
                        <a href="#0" data-date="28/02/2014">28 Feb</a>
                    </li>
                    <li>
                        <a href="#0" data-date="20/04/2014">20 Mar</a>
                    </li>
                    <li>
                        <a href="#0" data-date="20/05/2014">20 May</a>
                    </li>
                    <li>
                        <a href="#0" data-date="09/07/2014">09 Jul</a>
                    </li>
                    <li>
                        <a href="#0" data-date="30/08/2014">30 Aug</a>
                    </li>
                    <li>
                        <a href="#0" data-date="15/09/2014">15 Sep</a>
                    </li>
                    <li>
                        <a href="#0" data-date="01/11/2014">01 Nov</a>
                    </li>
                    <li>
                        <a href="#0" data-date="10/12/2014">10 Dec</a>
                    </li>
                    <li>
                        <a href="#0" data-date="19/01/2015">29 Jan</a>
                    </li>
                    <li>
                        <a href="#0" data-date="03/03/2015">3 Mar</a>
                    </li>
                </ol>

                <span class="filling-line" aria-hidden="true"></span>
            </div>
            <!-- .events -->
        </div>
        <!-- .events-wrapper -->

        <ul class="cd-timeline-navigation">
            <li>
                <a href="#0" class="prev inactive">Prev</a>
            </li>
            <li>
                <a href="#0" class="next">Next</a>
            </li>
        </ul>
        <!-- .cd-timeline-navigation -->
    </div>
    <!-- .timeline -->

    <div class="events-content">
        <ol>
            @foreach($timeline as $d)
            <li class="selected" data-date="16/01/2014">
                <h2>Horizontal Timeline</h2>
                <em>January 16th, 2014</em>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla
                    adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam
                    molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam,
                    quae, temporibus dolores porro doloribus.
                </p>
            </li>
            @endforeach
        </ol>
    </div>
    <!-- .events-content -->
</section>
</div>