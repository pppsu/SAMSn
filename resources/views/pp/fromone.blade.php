<!doctype html>
<!--
@license
Copyright (c) 2015 The Polymer Project Authors. All rights reserved.
This code may only be used under the BSD style license found at http://polymer.github.io/LICENSE.txt
The complete set of authors may be found at http://polymer.github.io/AUTHORS.txt
The complete set of contributors may be found at http://polymer.github.io/CONTRIBUTORS.txt
Code distributed by Google as part of the polymer project is also
subject to an additional IP rights grant found at http://polymer.github.io/PATENTS.txt
-->
<html>
<head>
  <title>paper-radio-button demo</title>

  <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, user-scalable=yes">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">

  <script src="../../webcomponentsjs/webcomponents-lite.js"></script>

  <link rel="import" href="../../iron-demo-helpers/demo-snippet.html">
  <link rel="import" href="../../iron-demo-helpers/demo-pages-shared-styles.html">
  <link rel="import" href="../paper-radio-button.html">

  <style is="custom-style" include="demo-pages-shared-styles">
    .vertical-section-container {
      max-width: 630px;
    }

    paper-radio-button {
      margin-right: 24px;
    }
  </style>
</head>
<body unresolved>
  <div class="vertical-section-container centered">
    <h3>Radio buttons can be checked or unchecked, or disabled entirely</h3>
    <demo-snippet class="centered-demo">
      <template>
        <paper-radio-button>Radio</paper-radio-button>
        <paper-radio-button checked>Radio</paper-radio-button>
        <paper-radio-button disabled>Disabled</paper-radio-button>
      </template>
    </demo-snippet>

    <h3>Radio buttons can hide the ripple effect using the <i>noink</i> attribute</h3>
    <demo-snippet class="centered-demo">
      <template>
        <paper-radio-button noink>Radio</paper-radio-button>
      </template>
    </demo-snippet>

    <h3>Radio buttons can be styled using custom properties</h3>
    <demo-snippet class="centered-demo">
      <template>
        <style is="custom-style">
          paper-radio-button.red {
            --paper-radio-button-checked-color: var(--paper-red-500);
            --paper-radio-button-checked-ink-color: var(--paper-red-500);
            --paper-radio-button-unchecked-color: var(--paper-red-900);
            --paper-radio-button-unchecked-ink-color: var(--paper-red-900);
            --paper-radio-button-label-color: var(--paper-red-500);
          }
          paper-radio-button.green {
            --paper-radio-button-checked-color: var(--paper-green-500);
            --paper-radio-button-checked-ink-color: var(--paper-green-500);
            --paper-radio-button-unchecked-color: var(--paper-green-900);
            --paper-radio-button-unchecked-ink-color: var(--paper-green-900);
            --paper-radio-button-label-color: var(--paper-green-500);
          }
        </style>

        <paper-radio-button class="red">Radio</paper-radio-button>
        <paper-radio-button checked class="green">Radio</paper-radio-button>
      </template>
    </demo-snippet>
  </div>
</body>
</html>
<!doctype html>
<!--
@license
Copyright (c) 2015 The Polymer Project Authors. All rights reserved.
This code may only be used under the BSD style license found at http://polymer.github.io/LICENSE.txt
The complete set of authors may be found at http://polymer.github.io/AUTHORS.txt
The complete set of contributors may be found at http://polymer.github.io/CONTRIBUTORS.txt
Code distributed by Google as part of the polymer project is also
subject to an additional IP rights grant found at http://polymer.github.io/PATENTS.txt
-->
<html>
<head>
  <title>paper-radio-button demo</title>

  <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, user-scalable=yes">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">

  <script src="../../webcomponentsjs/webcomponents-lite.js"></script>

  <link rel="import" href="../../iron-demo-helpers/demo-snippet.html">
  <link rel="import" href="../../iron-demo-helpers/demo-pages-shared-styles.html">
  <link rel="import" href="../paper-radio-button.html">

  <style is="custom-style" include="demo-pages-shared-styles">
    .vertical-section-container {
      max-width: 630px;
    }

    paper-radio-button {
      margin-right: 24px;
    }
  </style>
</head>
<body unresolved>
  <div class="vertical-section-container centered">
    <h3>Radio buttons can be checked or unchecked, or disabled entirely</h3>
    <demo-snippet class="centered-demo">
      <template>
        <paper-radio-button>Radio</paper-radio-button>
        <paper-radio-button checked>Radio</paper-radio-button>
        <paper-radio-button disabled>Disabled</paper-radio-button>
      </template>
    </demo-snippet>

    <h3>Radio buttons can hide the ripple effect using the <i>noink</i> attribute</h3>
    <demo-snippet class="centered-demo">
      <template>
        <paper-radio-button noink>Radio</paper-radio-button>
      </template>
    </demo-snippet>

    <h3>Radio buttons can be styled using custom properties</h3>
    <demo-snippet class="centered-demo">
      <template>
        <style is="custom-style">
          paper-radio-button.red {
            --paper-radio-button-checked-color: var(--paper-red-500);
            --paper-radio-button-checked-ink-color: var(--paper-red-500);
            --paper-radio-button-unchecked-color: var(--paper-red-900);
            --paper-radio-button-unchecked-ink-color: var(--paper-red-900);
            --paper-radio-button-label-color: var(--paper-red-500);
          }
          paper-radio-button.green {
            --paper-radio-button-checked-color: var(--paper-green-500);
            --paper-radio-button-checked-ink-color: var(--paper-green-500);
            --paper-radio-button-unchecked-color: var(--paper-green-900);
            --paper-radio-button-unchecked-ink-color: var(--paper-green-900);
            --paper-radio-button-label-color: var(--paper-green-500);
          }
        </style>

        <paper-radio-button class="red">Radio</paper-radio-button>
        <paper-radio-button checked class="green">Radio</paper-radio-button>
      </template>
    </demo-snippet>
  </div>
</body>
</html>
