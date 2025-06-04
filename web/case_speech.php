<?php include('header.php');?>
    <div class="my-container">
        <header class="header-section">
            <h1 class="main-title">MLK Adaptations: A Poetic Explorer</h1>
            <p class="subtitle">Witness how the "I Have a Dream" speech structure is transformed through the universal node framework.</p>
        </header>

        <div class="content-area" style="background-color:#CCC; border-radius:20px;padding:20px;">
            <p style="color:#333;">
                This section demonstrates the incredible adaptability of the universal node framework by reimagining Martin Luther King Jr.'s iconic "I Have a Dream" speech. Explore how its powerful poetic and rhythmic structure can be applied to wildly different subjects and tones, showcasing the framework's ability to abstract and re-contextualize core meaning.
            </p>

            <div class="control-group">
                <label for="mlkTypeSelect" class="form-label">Select MLK Adaptation:</label>
                <select id="mlkTypeSelect" class="form-select">
                    <option value="cantaloupe_dream">Cantaloupe Dream</option>
                    <option value="cantaloupe_complaint">Cantaloupe Complaint</option>
                    <option value="steak_dream">Steak Dream</option>
                    <option value="steak_complaint">Steak Complaint</option>
                    <option value="grill_dream">Grill Dream</option>
                </select>
            </div>

            <article id="poemDisplay" class="poem-display-section">
                <h3 id="poemTitle" class="poem-title"></h3>
                <div id="poemContent" class="poem-content"></div>
            </article>

            <section id="observationsDisplay" class="observations-section">
                <h4 class="observations-title">Observations</h4>
                <div id="observationContent" class="observation-content"></div>
            </section>
        </div>

    </div>

    <script>
        // Data is now fetched from PHP, but for this standalone HTML, we'll embed it for simplicity.
        // In a real scenario, this would be fetched from a PHP script like poem_generator.php
        const mlkPoemsData = {
            cantaloupe_dream: {
                title: "I Have a Dream (of Cantaloupes)",
                content: `
                    <p>I am delighted to stand here today,<br>
                    To speak of fruits that brighten our way.<br>
                    I have a dream, that one day soon,<br>
                    Cantaloupes will grace every noon.</p>
                    <p>I have a dream, of vines that weave,<br>
                    Of sunlit fields where they conceive,<br>
                    A land where sweetness freely flows,<br>
                    In every slice that nature bestows.</p>
                    <p>I have a dream, of seeds that sprout,<br>
                    Of golden spheres that come about,<br>
                    Where hands unite to share the feast,<br>
                    From north to south, from west to east.</p>
                    <p>Let freedom ring from every rind,<br>
                    In every bite, let joy unwind.<br>
                    Let every heart and table feel,<br>
                    The cantaloupe’s enduring appeal.</p>
                    <p>This is the hope we carry still,<br>
                    That cantaloupes our plates will fill.<br>
                    And when this happens, we will sing,<br>
                    The anthem of the melon king.</p>
                `,
                observation: 'The flow and cadence mirror the original speech. Themes of hope, unity, and abundance are seamlessly adapted to the cantaloupe narrative. A touch of humor keeps it lighthearted while maintaining respect for the iconic structure.'
            },
            cantaloupe_complaint: {
                title: "I Have a Complaint (About Cantaloupes)",
                content: `
                    <p>I am troubled to sit here today,<br>
                    To complain of fruits that heighten my dismay.<br>
                    I have a grievance, and let it be known,<br>
                    Cantaloupes should leave my plate alone.</p>
                    <p>I have a grievance, of rinds too tough,<br>
                    Of tasteless flesh, I\'ve had enough.<br>
                    A land where melons reign supreme,<br>
                    Is a land that haunts my bitter dream.</p>
                    <p>I have a grievance, of seeds that spill,<br>
                    Of sweetness faint, against my will.<br>
                    Where every slice brings more regret,<br>
                    A fruit I simply cannot forget.</p>
                    <p>Let freedom ring from every rind,<br>
                    For those who\'d leave this fruit behind.<br>
                    Let every market shelf be free,<br>
                    Of cantaloupes, their tyranny.</p>
                    <p>This is my hope, my rallying cry,<br>
                    That cantaloupes will pass me by.<br>
                    And when this happens, I’ll declare,<br>
                    A melon-free world, with joy to spare.</p>
                `,
                observation: 'The speech now takes on a humorous, tongue-in-cheek tone of protest while retaining its original rhythm and rhetorical strength. The adaptation emphasizes personal dismay while calling for unity in rejecting cantaloupes.'
            },
            steak_dream: {
                title: "I Have a Dream (of Steak)",
                content: `
                    <p>I am delighted to stand here today,<br>
                    To speak of steaks that brighten my way.<br>
                    I have a dream, that one fine night,<br>
                    The sizzle of steak will bring delight.</p>
                    <p>I have a dream, of grills that flame,<br>
                    Of tender cuts that earn their fame.<br>
                    A land where marbling reigns supreme,<br>
                    Where steak fulfills every carnivore\'s dream.</p>
                    <p>I have a dream, of feasts to share,<br>
                    Of sirloins seared with utmost care,<br>
                    Where every table, from east to west,<br>
                    Will savor steak, the very best.</p>
                    <p>Let freedom ring from every grill,<br>
                    From T-bone cuts to flank with skill.<br>
                    Let every bite and every plate,<br>
                    Celebrate steak, so truly great.</p>
                    <p>This is the dream I carry still,<br>
                    That steak our plates will always fill.<br>
                    And when it happens, we’ll declare,<br>
                    Steak is the meal beyond compare.</p>
                `,
                observation: 'The "dream" version elevates steak as the pinnacle of culinary delight.'
            },
            steak_complaint: {
                title: "I Have a Complaint (About Steak)",
                content: `
                    <p>I am troubled to sit here today,<br>
                    To complain of steak that ruins my day.<br>
                    I have a grievance, and I must confide,<br>
                    That steak is the meal I cannot abide.</p>
                    <p>I have a grievance, of cuts too tough,<br>
                    Of leathery bites—I’ve had enough.<br>
                    A land where steaks take center stage,<br>
                    Is a land where hunger stokes my rage.</p>
                    <p>I have a grievance, of meals so bland,<br>
                    Of overcooked beef I cannot stand.<br>
                    Where every chew is a battle lost,<br>
                    A steak that comes at too great a cost.</p>
                    <p>Let freedom ring from every plate,<br>
                    For those who\'d leave this steak to fate.<br>
                    Let every table, from east to west,<br>
                    Reject the steak, and find what’s best.</p>
                    <p>This is my cry, my solemn plea,<br>
                    That steaks no more torment me.<br>
                    And when this happens, I’ll proclaim,<br>
                    A better meal, without the shame.</p>
                `,
                observation: 'The "complaint" version captures the frustrations of a poorly prepared steak, humorously blending grievance with rhythm.'
            },
            grill_dream: {
                title: "I Have a Grill (and a Dream)",
                content: `
                    <p>I have a grill, and let it be known,<br>
                    Its flames are where the finest steaks are grown.<br>
                    I have a grill, that one fine day,<br>
                    Shall turn raw cuts into gourmet display.</p>
                    <p>I have a grill, of coals that glow,<br>
                    Of iron grates where juices flow.<br>
                    A land where marbling meets the flame,<br>
                    Where steak achieves its rightful fame.</p>
                    <p>I have a grill, of feasts divine,<br>
                    Where T-bones sear and ribeyes shine.<br>
                    Where every flip, with care bestowed,<br>
                    Unlocks the flavor that we’re owed.</p>
                    <p>Let freedom ring from every grate,<br>
                    From medium rare to well-done plate.<br>
                    Let every meal be cooked with skill,<br>
                    By hands that wield the mighty grill.<br>
                    <p>This is my dream, my fiery creed,<br>
                    That steak shall meet its grilling need.<br>
                    And when it’s served, we’ll gladly sing,<br>
                    “All hail the grill, the meal it brings!”</p>
                `,
                observation: 'The grill becomes a symbol of culinary artistry, with the rhythmic cadence honoring both process and result. It celebrates not just the food, but the ritual and mastery of grilling itself.'
            }
        };

        const poemTitleEl = document.getElementById('poemTitle');
        const poemContentEl = document.getElementById('poemContent');
        const observationContentEl = document.getElementById('observationContent');
        const mlkTypeSelect = document.getElementById('mlkTypeSelect');

        function updateDisplay() {
            const selectedMlkType = mlkTypeSelect.value;
            const poemData = mlkPoemsData[selectedMlkType];

            if (poemData) {
                poemTitleEl.textContent = poemData.title;
                poemContentEl.innerHTML = poemData.content;
                observationContentEl.innerHTML = `<p>${poemData.observation}</p>`;
            } else {
                poemTitleEl.textContent = 'Poem Not Found';
                poemContentEl.innerHTML = '<p>The selected poem adaptation could not be loaded.</p>';
                observationContentEl.innerHTML = '<p>No observations available.</p>';
            }
        }

        mlkTypeSelect.addEventListener('change', updateDisplay);

        // Initial display when the page loads
        updateDisplay();
    </script>
</body>
</html>
