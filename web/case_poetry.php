<?php
header('Content-Type: application/json; charset=UTF-8');

// The full poem data, including variations and observations
$poemsData = [
    'garden' => [
        'title' => "The Garden's Requiem",
        'base' => '
            <p>Above the veil of emerald dew,<br>
            The whispers of the blooms renew.<br>
            A breeze of lilac scents the air,<br>
            Dancing with shadows, soft and rare.</p>
            <p>Through arches green, where paths entwine,<br>
            A flicker wakes the ancient vine.<br>
            The moonlight drapes its silver thread,<br>
            Illuming petals where dreams are fed.</p>
            <p>Distant boughs sway low and still,<br>
            Unfolding secrets on the hill.<br>
            And here I kneel, a fleeting prayer,<br>
            Bound to the garden’s timeless care.</p>
        ',
        'observations' => [
            'none' => "This poem evokes a serene, natural setting, focusing on gentle movements and sensory details typical of a garden at twilight or dawn. The 'Above' perspective establishes a slightly elevated, observational viewpoint.",
        ]
    ],
    'steel' => [
        'title' => "Steel Symphony",
        'base' => '
            <p>Above the veil of iron skies,<br>
            The forge of twilight embers flies.<br>
            Whispers echo from molten streams,<br>
            A dance of sparks ignites the seams.</p>
            <p>Through metal halls, where shadows roam,<br>
            A flicker hums the engine’s tome.<br>
            The restless gears begin to sigh,<br>
            Illuming steel where futures lie.</p>
            <p>Distant clangs, their rhythm slow,<br>
            Resound where endless hammers go.<br>
            And here I stand, a spark undone,<br>
            Bound to the heart of what we’ve spun.</p>
        ',
        'below' => '
            <p>Below the veil of iron skies,<br>
            The forge of twilight embers lies.<br>
            Whispers echo from molten streams,<br>
            A dance of sparks ignites the seams.</p>
            <p>Through metal halls, where shadows roam,<br>
            A flicker hums the engine’s tome.<br>
            The restless gears begin to sigh,<br>
            Illuming steel where futures lie.</p>
            <p>Distant clangs, their rhythm slow,<br>
            Resound where endless hammers go.<br>
            And here I stand, a spark undone,<br>
            Bound to the heart of what we’ve spun.</p>
        ',
        'yesterday' => '
            <p>In the depths of yesterday’s skies,<br>
            The forge of twilight embers lies.<br>
            Whispers echo from molten streams,<br>
            A dance of sparks ignites the seams.</p>
            <p>Through metal halls, where shadows roam,<br>
            A flicker hums the engine’s tome.<br>
            The restless gears begin to sigh,<br>
            Illuming steel where futures lie.</p>
            <p>Distant clangs, their rhythm slow,<br>
            Resound where endless hammers go.<br>
            And here I stand, a spark undone,<br>
            Bound to the heart of what we’ve spun.</p>
        ',
        'observations' => [
            'none' => "The 'Steel Symphony' shifts to an industrial, mechanical theme. The 'Above' perspective provides a view over this metallic landscape.",
            'below' => "'Below' in Steel Symphony grounds the scene, evoking depth and a sense of being amidst or underneath the machinery, emphasizing its imposing nature.",
            'yesterday' => "Using 'In the Depths of Yesterday' anchors the industrial scene in a past era, perhaps evoking a sense of historical industry or forgotten machinery."
        ]
    ],
    'celestial' => [
        'title' => "Celestial Reverie",
        'base' => '
            <p>Above the veil of cosmic light,<br>
            The stars weave threads in endless flight.<br>
            Whispers drift through the astral sea,<br>
            A dance of galaxies beckons me.</p>
            <p>Through nebulae, where colors flare,<br>
            A flicker blooms in stardust rare.<br>
            The restless void begins to sigh,<br>
            Illuming paths where wonders lie.</p>
            <p>Distant worlds, their orbits slow,<br>
            Spin tales of what we’ll never know.<br>
            And here I gaze, a fleeting spark,<br>
            Bound to the cosmos, vast and stark.</p>
        ',
        'amidst' => '
            <p>Amidst the veil of cosmic light,<br>
            The stars weave threads in endless flight.<br>
            Whispers drift through the astral sea,<br>
            A dance of galaxies beckons me.</p>
            <p>Through nebulae, where colors flare,<br>
            A flicker blooms in stardust rare.<br>
            The restless void begins to sigh,<br>
            Illuming paths where wonders lie.</p>
            <p>Distant worlds, their orbits slow,<br>
            Spin tales of what we’ll never know.<br>
            And here I gaze, a fleeting spark,<br>
            Bound to the cosmos, vast and stark.</p>
        ',
        'near' => '
            <p>Near the veil of cosmic light,<br>
            The stars converge in radiant flight.<br>
            Whispers drift through the astral sea,<br>
            A dance of galaxies calls to me.</p>
            <p>Through nebulae, where colors flare,<br>
            A flicker blooms in stardust rare.<br>
            The restless void begins to sigh,<br>
            Illuming paths where wonders lie.</p>
            <p>Distant worlds, their orbits slow,<br>
            Spin tales of what we’ll never know.<br>
            And here I gaze, a fleeting spark,<br>
            Bound to the cosmos, vast and stark.</p>
        ',
        'future' => '
            <p>In the distant future’s light,<br>
            The stars converge in endless flight.<br>
            Whispers drift through the astral sea,<br>
            A dance of galaxies calls to me.</p>
            <p>Through nebulae, where colors flare,<br>
            A flicker blooms in stardust rare.<br>
            The restless void begins to sigh,<br>
            Illuming paths where wonders lie.</p>
            <p>Distant worlds, their orbits slow,<br>
            Spin tales of what we’ll never know.<br>
            And here I gaze, a fleeting spark,<br>
            Bound to the cosmos, vast and stark.</p>
        ',
        'observations' => [
            'none' => "'Celestial Reverie' transports the reader to a cosmic scale, with the 'Above' perspective looking down upon or across the vastness of space.",
            'amidst' => "'Amidst' in Celestial Reverie places the narrator directly within the cosmic phenomena, enhancing the sense of immersion and wonder.",
            'near' => "'Near' in Celestial Reverie brings the cosmic events closer, intensifying their impact and the narrator's connection to them.",
            'future' => "'In the Distant Future' projects the celestial scene into a far-off epoch, adding a layer of temporal scale and speculative wonder to the cosmic imagery."
        ]
    ]
];

$generalInsights = "Each poetic version, though distinct in scenery and subject (garden, forge, cosmos), maintains a consistent underlying structure and emotional resonance. This demonstrates the node stack's versatility in generating varied yet coherent outputs. Subtle shifts in perspective or time-spatial modifiers enrich the poem’s viewpoint while retaining its core essence.";

// Get parameters from the GET request
$selectedBaseKey = $_GET['base'] ?? 'garden';
$selectedPerspective = $_GET['perspective'] ?? 'none';
$selectedTime = $_GET['time'] ?? 'none';

$basePoemData = $poemsData[$selectedBaseKey] ?? $poemsData['garden']; // Fallback to garden if invalid key

$currentPoemContent = $basePoemData['base'];
$currentTitle = $basePoemData['title'];
$currentObservation = $basePoemData['observations']['none'] ?? $generalInsights;

// Apply time modifier first
if ($selectedTime !== 'none' && isset($basePoemData[$selectedTime])) {
    $currentPoemContent = $basePoemData[$selectedTime];
    switch ($selectedTime) {
        case 'yesterday':
            $currentTitle = $basePoemData['title'] . " (In the Depths of Yesterday)";
            break;
        case 'future':
            $currentTitle = $basePoemData['title'] . " (In the Distant Future)";
            break;
    }
    $currentObservation = $basePoemData['observations'][$selectedTime] ?? $currentObservation;
    // If a time modifier is active, perspective modifiers are typically overridden in this setup
    // For simplicity, we ensure perspective doesn't add conflicting text if time is selected
    // Note: The JS will also handle resetting the other dropdown.
}
// Then, if no time modifier, apply perspective modifier
else if ($selectedPerspective !== 'none' && isset($basePoemData[$selectedPerspective])) {
    $currentPoemContent = $basePoemData[$selectedPerspective];
    switch ($selectedPerspective) {
        case 'below':
            $currentTitle = $basePoemData['title'] . " (Below)";
            break;
        case 'amidst':
            $currentTitle = $basePoemData['title'] . " (Amidst)";
            break;
        case 'near':
            $currentTitle = $basePoemData['title'] . " (Near)";
            break;
    }
    $currentObservation = $basePoemData['observations'][$selectedPerspective] ?? $currentObservation;
}

// Prepare the data to be sent back as JSON
$response = [
    'title' => $currentTitle,
    'content' => $currentPoemContent,
    'observation' => '<p>' . $currentObservation . '</p><p class="mt-2 italic">' . $generalInsights . '</p>'
];

echo json_encode($response);
?>