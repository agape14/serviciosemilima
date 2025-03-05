@extends('admin.layouts.master')
@section('title') @lang('translation.Buttons')  @endsection
@section('content')
@component('admin.components.breadcrumb')
@slot('li_1') Components @endslot
@slot('title') Buttons @endslot
@endcomponent

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Default Buttons</h4>
                <p class="card-title-desc">Bootstrap includes six predefined button styles, each serving its own semantic purpose.</p>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-primary waves-effect waves-light">Primary</button>
                    <button type="button" class="btn btn-secondary waves-effect waves-light">Secondary</button>
                    <button type="button" class="btn btn-success waves-effect waves-light">Success</button>
                    <button type="button" class="btn btn-info waves-effect waves-light">Info</button>
                    <button type="button" class="btn btn-warning waves-effect waves-light">Warning</button>
                    <button type="button" class="btn btn-danger waves-effect waves-light">Danger</button>
                    <button type="button" class="btn btn-dark waves-effect waves-light">Dark</button>
                    <button type="button" class="btn btn-link waves-effect">Link</button>
                    <button type="button" class="btn btn-light waves-effect">Light</button>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Outline Buttons</h4>
                <p class="card-title-desc">Replace the default modifier classes with the <code
                        class="highlighter-rouge">.btn-outline-*</code> ones to remove all background images and colors on any
                    button.
                </p>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-outline-primary waves-effect waves-light">Primary</button>
                    <button type="button" class="btn btn-outline-secondary waves-effect">Secondary</button>
                    <button type="button" class="btn btn-outline-success waves-effect waves-light">Success</button>
                    <button type="button" class="btn btn-outline-info waves-effect waves-light">Info</button>
                    <button type="button" class="btn btn-outline-warning waves-effect waves-light">Warning</button>
                    <button type="button" class="btn btn-outline-danger waves-effect waves-light">Danger</button>
                    <button type="button" class="btn btn-outline-dark waves-effect waves-light">Dark</button>
                    <button type="button" class="btn btn-outline-light waves-effect">Light</button>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Rounded Buttons</h4>
                <p class="card-title-desc">Use class <code>.btn-rounded</code> for button round border.</p>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light">Primary</button>
                    <button type="button" class="btn btn-secondary btn-rounded waves-effect waves-light">Secondary</button>
                    <button type="button" class="btn btn-success btn-rounded waves-effect waves-light">Success</button>
                    <button type="button" class="btn btn-info btn-rounded waves-effect waves-light">Info</button>
                    <button type="button" class="btn btn-warning btn-rounded waves-effect waves-light">Warning</button>
                    <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light">Danger</button>
                    <button type="button" class="btn btn-dark btn-rounded waves-effect waves-light">Dark</button>
                    <button type="button" class="btn btn-link btn-rounded waves-effect">Link</button>
                    <button type="button" class="btn btn-light btn-rounded waves-effect">Light</button>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Buttons With Icon</h4>
                <p class="card-title-desc">Add icon in button.</p>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-primary waves-effect waves-light">
                        <i class="bx bx-smile font-size-16 align-middle me-2"></i> Primary
                    </button>
                    <button type="button" class="btn btn-success waves-effect waves-light">
                        <i class="bx bx-check-double font-size-16 align-middle me-2"></i> Success
                    </button>
                    <button type="button" class="btn btn-warning waves-effect waves-light">
                        <i class="bx bx-error font-size-16 align-middle me-2"></i> Warning
                    </button>
                    <button type="button" class="btn btn-danger waves-effect waves-light">
                        <i class="bx bx-block font-size-16 align-middle me-2"></i> Danger
                    </button>
                    <button type="button" class="btn btn-dark waves-effect waves-light">
                        <i class="bx bx-loader bx-spin font-size-16 align-middle me-2"></i> Loading
                    </button>
                    <button type="button" class="btn btn-light waves-effect">
                        <i class="bx bx-hourglass bx-spin font-size-16 align-middle me-2"></i> Loading
                    </button>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Soft Buttons</h4>
                <p class="card-title-desc">Soft buttons</p>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-soft-primary waves-effect waves-light">Primary</button>
                    <button type="button" class="btn btn-soft-secondary waves-effect waves-light">Secondary</button>
                    <button type="button" class="btn btn-soft-success waves-effect waves-light">Success</button>
                    <button type="button" class="btn btn-soft-info waves-effect waves-light">Info</button>
                    <button type="button" class="btn btn-soft-warning waves-effect waves-light">Warning</button>
                    <button type="button" class="btn btn-soft-danger waves-effect waves-light">Danger</button>
                    <button type="button" class="btn btn-soft-dark waves-effect waves-light">Dark</button>
                    <button type="button" class="btn btn-soft-link waves-effect">Link</button>
                    <button type="button" class="btn btn-soft-light waves-effect">Light</button>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Soft Icon Buttons</h4>
                <p class="card-title-desc">Use class <code>btn-soft-*</code> for button round border.</p>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-soft-primary waves-effect waves-light"><i class="bx bx-smile font-size-16 align-middle"></i></button>
                    <button type="button" class="btn btn-soft-success waves-effect waves-light"><i class="bx bx-check-double font-size-16 align-middle"></i></button>
                    <button type="button" class="btn btn-soft-warning waves-effect waves-light"><i class="bx bx-error font-size-16 align-middle"></i></button>
                    <button type="button" class="btn btn-soft-danger waves-effect waves-light"><i class="bx bx-block font-size-16 align-middle"></i></button>
                    <button type="button" class="btn btn-soft-dark waves-effect waves-light"><i class="bx bx-loader font-size-16 align-middle"></i></button>
                    <button type="button" class="btn btn-soft-light waves-effect waves-light"><i class="bx bx-hourglass font-size-16 align-middle"></i></button>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Disable Buttons</h4>
                <p class="card-title-desc">Make buttons look inactive by adding the <code>disabled</code> boolean attribute to any <code>&lt;button&gt;</code> element. Disabled buttons have <code>pointer-events: none</code> applied to, preventing hover and active states from triggering.</p>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-3">
                    <button type="button" class="btn btn-lg btn-primary" disabled>Primary button</button>
                    <button type="button" class="btn btn-secondary btn-lg" disabled>Button</button>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Link Functionality Caveat Disable Buttons</h4>
                <p class="card-title-desc"><code>&lt;a&gt;</code>s don’t support the <code>disabled</code> attribute, so you must add the <code>.disabled</code> class and <code>aria-disabled="true"</code> to make it visually appear disabled. also include a <code>tabindex="-1"</code> attribute.</p>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <a class="btn btn-primary btn-lg disabled" role="button" aria-disabled="true">Primary link</a>
                    <a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Link</a>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->


<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Snip Buttons</h4>
                <p class="card-title-desc">Example of Snip Buttons</p>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="row g-4">
                    <div class="col-xl-4">
                        <h5 class="font-size-15 mb-3">Example 1</h5>
                        <div class="btn-group btn-group-example mb-3" role="group">
                            <button type="button" class="btn btn-outline-primary w-sm">Left</button>
                            <button type="button" class="btn btn-outline-primary w-sm">Middle</button>
                            <button type="button" class="btn btn-outline-primary w-sm">Right</button>
                        </div>

                        <div>
                            <div class="btn-group btn-group-example mb-3" role="group">
                                <button type="button" class="btn btn-primary w-xs"><i class="mdi mdi-thumb-up"></i></button>
                                <button type="button" class="btn btn-danger w-xs"><i class="mdi mdi-thumb-down"></i></button>
                            </div>
                        </div>

                        <div>
                            <div class="btn-group btn-group-example" role="group">
                                <button type="button" class="btn btn-outline-secondary w-xs"><i class="bx bx-menu-alt-right"></i></button>
                                <button type="button" class="btn btn-outline-secondary w-xs"><i class="bx bx-menu"></i></button>
                                <button type="button" class="btn btn-outline-secondary w-xs"><i class="bx bx-menu-alt-left"></i></button>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-4">
                        <h5 class="font-size-15 mb-3">Example 2</h5>
                        <div class="d-flex flex-wrap gap-2">
                            <button type="button" class="btn btn-primary waves-effect btn-label waves-light"><i class="bx bx-smile label-icon"></i> Primary</button>
                            <button type="button" class="btn btn-success waves-effect btn-label waves-light"><i class="bx bx-check-double label-icon"></i> Success</button>
                            <button type="button" class="btn btn-warning waves-effect btn-label waves-light"><i class="bx bx-error label-icon"></i> Warning</button>
                            <button type="button" class="btn btn-danger waves-effect btn-label waves-light"><i class="bx bx-block label-icon"></i> Danger</button>
                            <button type="button" class="btn btn-dark waves-effect btn-label waves-light"><i class="bx bx-loader label-icon"></i> Dark</button>
                            <button type="button" class="btn btn-light waves-effect btn-label waves-light"><i class="bx bx-hourglass label-icon"></i> Light</button>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-4">
                        <h5 class="font-size-15 mb-3">Example 3</h5>
                        <div class="d-flex flex-wrap gap-2">
                            <button type="button" class="btn btn-primary waves-effect waves-light w-sm">
                                <i class="mdi mdi-download d-block font-size-16"></i> Download
                            </button>
                            <button type="button" class="btn btn-light waves-effect waves-light w-sm">
                                <i class="mdi mdi-upload d-block font-size-16"></i> Upload
                            </button>
                            <button type="button" class="btn btn-success waves-effect waves-light w-sm">
                                <i class="mdi mdi-pencil d-block font-size-16"></i> Edit
                            </button>
                            <button type="button" class="btn btn-danger waves-effect waves-light w-sm">
                                <i class="mdi mdi-trash-can d-block font-size-16"></i> Delete
                            </button>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Buttons Sizes</h4>
                <p class="card-title-desc">Add <code>.btn-lg</code> or <code>.btn-sm</code> for additional sizes.</p>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-3 align-items-center">
                    <button type="button" class="btn btn-primary btn-lg waves-effect waves-light">Large button</button>
                    <button type="button" class="btn btn-secondary btn-lg waves-effect waves-light">Large button</button>
                    <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Small button</button>
                    <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Small button</button>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Buttons Width</h4>
                <p class="card-title-desc">Add <code>.w-xs</code>, <code>.w-sm</code>, <code>.w-md</code> and <code> .w-lg</code> class for additional buttons width.</p>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-primary w-xs waves-effect waves-light">Xs</button>
                    <button type="button" class="btn btn-danger w-sm waves-effect waves-light">Small</button>
                    <button type="button" class="btn btn-warning w-md waves-effect waves-light">Medium</button>
                    <button type="button" class="btn btn-success w-lg waves-effect waves-light">Large</button>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Button Tags</h4>
                <p class="card-title-desc">
                    The <code class="highlighter-rouge">.btn</code>
                    classes are designed to be used with the <code
                            class="highlighter-rouge">&lt;button&gt;</code> element.
                    However, you can also use these classes on <code
                            class="highlighter-rouge">&lt;a&gt;</code> or <code
                            class="highlighter-rouge">&lt;input&gt;</code> elements (though
                    some browsers may apply a slightly different rendering).
                </p>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-3 align-items-center">
                    <a class="btn btn-primary waves-effect waves-light" href="#" role="button">Link</a>
                    <button class="btn btn-success waves-effect waves-light" type="submit">Button</button>
                    <input class="btn btn-info" type="button" value="Input">
                    <input class="btn btn-danger" type="submit" value="Submit">
                    <input class="btn btn-warning" type="reset" value="Reset">
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Toggle States</h4>
                <p class="card-title-desc">Add <code>data-bs-toggle="button"</code> to toggle a button’s <code>active</code> state. If you’re pre-toggling a button, you must manually add the <code>.active</code> class <strong>and</strong> <code>aria-pressed="true"</code> to ensure that it is conveyed appropriately to assistive technologies.</p>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <!-- Toggle States Button -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="button" autocomplete="off">Toggle button</button>
                    <button type="button" class="btn btn-primary active" data-bs-toggle="button" autocomplete="off" aria-pressed="true">Active toggle button</button>
                    <button type="button" class="btn btn-primary" disabled data-bs-toggle="button" autocomplete="off">Disabled toggle button</button>

                    <!-- Toggle States Link -->
                    <a href="#" class="btn btn-primary" role="button" data-bs-toggle="button">Toggle link</a>
                    <a href="#" class="btn btn-primary active" role="button" data-bs-toggle="button" aria-pressed="true">Active toggle link</a>
                    <a class="btn btn-primary disabled" aria-disabled="true" role="button" data-bs-toggle="button">Disabled toggle link</a>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Block Buttons</h4>
                <p class="card-title-desc">Add <code>.d-grid</code>. class in parent div for block buttons</p>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-primary btn-lg waves-effect waves-light">Block level button</button>
                    <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Block level button</button>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Checkbox & Radio Buttons</h4>
                <p class="card-title-desc">Create button-like checkboxes and radio buttons by using <code>.btn</code> styles rather than
                    <code>.form-check-label</code> on the <code>&lt;label&gt;</code> elements.
                </p>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="row g-2">
                    <div class="col-xl-6">
                        <div class="d-flex flex-wrap gap-3">
                            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">

                                <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off" checked>
                                <label class="btn btn-primary" for="btncheck1">Checkbox 1</label>

                                <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                                <label class="btn btn-primary" for="btncheck2">Checkbox 2</label>

                                <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                                <label class="btn btn-primary" for="btncheck3">Checkbox 3</label>
                            </div>

                            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off" checked>
                                <label class="btn btn-outline-primary" for="btncheck4">Checkbox 4</label>

                                <input type="checkbox" class="btn-check" id="btncheck5" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btncheck5">Checkbox 5</label>

                                <input type="checkbox" class="btn-check" id="btncheck6" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btncheck6">Checkbox 6</label>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-6">
                        <div class="d-flex flex-wrap gap-3">
                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                                <label class="btn btn-secondary" for="btnradio1">Radio 1</label>

                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                                <label class="btn btn-secondary" for="btnradio2">Radio 2</label>

                                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                                <label class="btn btn-secondary" for="btnradio3">Radio 3</label>
                            </div>

                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off" checked>
                                <label class="btn btn-outline-secondary" for="btnradio4">Radio 4</label>

                                <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="btnradio5">Radio 5</label>

                                <input type="radio" class="btn-check" name="btnradio" id="btnradio6" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="btnradio6">Radio 6</label>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Button Group</h4>
                <p class="card-title-desc">Wrap a series of buttons with <code
                    class="highlighter-rouge">.btn</code> in <code
                    class="highlighter-rouge">.btn-group</code>.
                </p>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="row g-4">
                    <div class="d-flex flex-wrap gap-3">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary">Left</button>
                            <button type="button" class="btn btn-primary">Middle</button>
                            <button type="button" class="btn btn-primary">Right</button>
                        </div>

                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-outline-primary">Left</button>
                            <button type="button" class="btn btn-outline-primary">Middle</button>
                            <button type="button" class="btn btn-outline-primary">Right</button>
                        </div>

                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-secondary"><i class="bx bx-menu-alt-right"></i></button>
                            <button type="button" class="btn btn-secondary"><i class="bx bx-menu"></i></button>
                            <button type="button" class="btn btn-secondary"><i class="bx bx-menu-alt-left"></i></button>
                        </div>
                    </div>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Button Toolbar</h4>
                <p class="card-title-desc">Combine sets of button groups into
                    button toolbars for more complex components. Use utility classes as
                    needed to space out groups, buttons, and more.
                </p>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="btn-toolbar gap-2" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group" role="group" aria-label="First group">
                        <button type="button" class="btn btn-secondary">1</button>
                        <button type="button" class="btn btn-secondary">2</button>
                        <button type="button" class="btn btn-secondary">3</button>
                        <button type="button" class="btn btn-secondary">4</button>
                    </div>
                    <div class="btn-group" role="group" aria-label="Second group">
                        <button type="button" class="btn btn-secondary">5</button>
                        <button type="button" class="btn btn-secondary">6</button>
                        <button type="button" class="btn btn-secondary">7</button>
                    </div>
                    <div class="btn-group" role="group" aria-label="Third group">
                        <button type="button" class="btn btn-secondary">8</button>
                    </div>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Sizing</h4>
                <p class="card-title-desc">Instead of applying button sizing
                    classes to every button in a group, just add <code
                            class="highlighter-rouge">.btn-group-*</code> to each <code
                            class="highlighter-rouge">.btn-group</code>, including each one
                    when nesting multiple groups.
                </p>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-3">
                    <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-primary">Left</button>
                        <button type="button" class="btn btn-primary">Middle</button>
                        <button type="button" class="btn btn-primary">Right</button>
                    </div>

                    <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-outline-primary">Left</button>
                        <button type="button" class="btn btn-outline-primary">Middle</button>
                        <button type="button" class="btn btn-outline-primary">Right</button>
                    </div>
                </div>


                <div class="d-flex flex-wrap gap-3 my-3">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-secondary">Left</button>
                        <button type="button" class="btn btn-secondary">Middle</button>
                        <button type="button" class="btn btn-secondary">Right</button>
                    </div>

                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-outline-secondary">Left</button>
                        <button type="button" class="btn btn-outline-secondary">Middle</button>
                        <button type="button" class="btn btn-outline-secondary">Right</button>
                    </div>
                </div>

                <div class="d-flex flex-wrap gap-3">
                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-danger">Left</button>
                        <button type="button" class="btn btn-danger">Middle</button>
                        <button type="button" class="btn btn-danger">Right</button>
                    </div>

                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-outline-danger">Left</button>
                        <button type="button" class="btn btn-outline-danger">Middle</button>
                        <button type="button" class="btn btn-outline-danger">Right</button>
                    </div>
                </div>

            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Vertical Variation</h4>
                <p class="card-title-desc">Make a set of buttons appear vertically
                    stacked rather than horizontally. Split button dropdowns are not
                    supported here.
                </p>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-4 align-items-start">
                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                        <button type="button" class="btn btn-primary">1</button>
                        <button type="button" class="btn btn-primary">2</button>

                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dropdown <i class="mdi mdi-chevron-down"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                        <button type="button" class="btn btn-secondary">Button</button>
                        <div class="btn-group" role="group">
                            <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown <i class="mdi mdi-chevron-down"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                <a class="dropdown-item" href="#">Dropdown link</a>
                                <a class="dropdown-item" href="#">Dropdown link</a>
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary">Button</button>
                        <button type="button" class="btn btn-secondary">Button</button>
                    </div>

                    <div class="btn-group-vertical" role="group" aria-label="Vertical radio toggle button group">
                        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio1" autocomplete="off" checked="">
                        <label class="btn btn-outline-danger" for="vbtn-radio1">Radio 1</label>
                        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio2" autocomplete="off">
                        <label class="btn btn-outline-danger" for="vbtn-radio2">Radio 2</label>
                        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio3" autocomplete="off">
                        <label class="btn btn-outline-danger" for="vbtn-radio3">Radio 3</label>
                    </div>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->
@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
