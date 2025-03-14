<x-app-layout>
    @once
        @push('vendors')
            @vite('resources/js/vendor/toastify/index.js')
        @endpush
    @endonce

    @once
        @push('scripts')
            @vite('resources/js/pages/notification/index.js')
        @endpush
    @endonce

        @push('scripts')

            <script>
                window.onload = function() {
                    console.log($);
                    console.log($.prototype);
                    console.log($.constructor);
                    let elem = $("#danger-generic-notification")
                        .clone();
                        //.removeClass("hidden")[0];
                    //elem.find('font-medium').text('Yay! Updates Published!');
//console.log(elem.replace('{title}', 'Titulo novo'));
                    console.log(elem.removeClass("hidden")[0].outerHTML);
                    var outerHTML = elem.removeClass("hidden")[0].outerHTML;
                    var modifiedOuterHTML = outerHTML.replace('{title}', 'John').replace('{content}', 'Dow');
                    console.log(modifiedOuterHTML);
                    let x = $(modifiedOuterHTML);

                    // Step 3: Replace the original element with the modified HTML
                    elem.outerHTML = modifiedOuterHTML;
                    //let title = elem.removeClass("hidden")[0];
                    //let title = elem.html().replace('{title}', 'Titulo novo');
                    //let x = $(title);
                    //let y =
                    Toastify({
                        node: x[0],
                        //text: "Yay! Updates Published!",
                        duration: 10000,
                        newWindow: true,
                        close: true,
                        gravity: "top",
                        position: "right",
                        stopOnFocus: true,
                    }).showToast();
                }
            </script>
        @endpush
        <x-base.notification
            class="flex"
            id="success-generic-notification"
        >
            <x-base.lucide
                class="text-success"
                icon="check-circle"
            />
            <div class="ml-4 mr-4">
                <div class="font-medium">{title}</div>
                <div class="mt-1 text-slate-500">
                    {content}
                </div>
            </div>
        </x-base.notification>
        <x-base.notification
            class="flex"
            id="danger-generic-notification"
        >
            <x-base.lucide
                class="text-danger"
                icon="x-circle"
            />
            <div class="ml-4 mr-4">
                <div class="font-medium">{title}</div>
                <div class="mt-1 text-slate-500">
                    {content}
                </div>
            </div>
        </x-base.notification>
        <x-base.notification
            class="flex"
            id="warning-generic-notification"
        >
            <x-base.lucide
                class="text-warning"
                icon="alert-circle"
            />
            <div class="ml-4 mr-4">
                <div class="font-medium">{title}</div>
                <div class="mt-1 text-slate-500">
                    {content}
                </div>
            </div>
        </x-base.notification>
        <x-base.notification
            class="flex"
            id="info-generic-notification"
        >
            <x-base.lucide
                class="text-info"
                icon="info"
            />
            <div class="ml-4 mr-4">
                <div class="font-medium">{title}</div>
                <div class="mt-1 text-slate-500">
                    {content}
                </div>
            </div>
        </x-base.notification>

    <div class="intro-y mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Notification</h2>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Basic Notification -->
            <x-base.preview-component class="intro-y box">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Basic Notification
                    </h2>
                    <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label for="show-example-1">
                            Show example code
                        </x-base.form-switch.label>
                        <x-base.form-switch.input
                            class="ml-3 mr-0"
                            id="show-example-1"
                            type="checkbox"
                        />
                    </x-base.form-switch>
                </div>
                <div class="p-5">
                    <x-base.preview>
                        <div class="text-center">
                            <!-- BEGIN: Notification Content -->
                            <x-base.notification
                                class="flex flex-col sm:flex-row"
                                id="basic-non-sticky-notification-content"
                            >
                                <div class="font-medium">
                                    Yay! Updates Published!
                                </div>
                                <a
                                    class="mt-1 font-medium text-primary dark:text-slate-400 sm:mt-0 sm:ml-40"
                                    href=""
                                >
                                    Review Changes
                                </a>
                            </x-base.notification>
                            <!-- END: Notification Content -->
                            <!-- BEGIN: Notification Toggle -->
                            <x-base.button
                                class="mr-1"
                                id="basic-non-sticky-notification-toggle"
                                variant="primary"
                            >
                                Show Non Sticky Notification
                            </x-base.button>
                            <x-base.button
                                class="mt-2 sm:mt-0"
                                id="basic-sticky-notification-toggle"
                                variant="primary"
                            >
                                Show Sticky Notification
                            </x-base.button>
                            <!-- END: Notification Toggle -->
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div class="text-center">
                                <!-- BEGIN: Notification Content -->
                                <x-base.notification
                                    class="flex flex-col sm:flex-row"
                                    id="basic-non-sticky-notification-content"
                                >
                                    <div class="font-medium">
                                        Yay! Updates Published!
                                    </div>
                                    <a
                                        class="mt-1 font-medium text-primary dark:text-slate-400 sm:mt-0 sm:ml-40"
                                        href=""
                                    >
                                        Review Changes
                                    </a>
                                </x-base.notification>
                                <!-- END: Notification Content -->
                                <!-- BEGIN: Notification Toggle -->
                                <x-base.button
                                    class="mr-1"
                                    id="basic-non-sticky-notification-toggle"
                                    variant="primary"
                                >
                                    Show Non Sticky Notification
                                </x-base.button>
                                <x-base.button
                                    class="mt-2 sm:mt-0"
                                    id="basic-sticky-notification-toggle"
                                    variant="primary"
                                >
                                    Show Sticky Notification
                                </x-base.button>
                                <!-- END: Notification Toggle -->
                            </div>
                        </x-base.highlight>
                        <x-base.highlight
                            class="mt-5"
                            type="javascript"
                        >
                            // Basic non sticky notification
                            $("#basic-non-sticky-notification-toggle").on("click", function () {
                            Toastify({
                            node: $("#basic-non-sticky-notification-content")
                            .clone()
                            .removeClass("hidden")[0],
                            duration: 3000,
                            newWindow: true,
                            close: true,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "white",
                            stopOnFocus: true,
                            }).showToast();
                            });

                            // Basic sticky notification
                            $("#basic-sticky-notification-toggle").on("click", function () {
                            Toastify({
                            node: $("#basic-non-sticky-notification-content")
                            .clone()
                            .removeClass("hidden")[0],
                            duration: -1,
                            newWindow: true,
                            close: true,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "white",
                            stopOnFocus: true,
                            }).showToast();
                            });
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Basic Notification -->
            <!-- BEGIN: Success Notification -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Success Notification
                    </h2>
                    <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label for="show-example-2">
                            Show example code
                        </x-base.form-switch.label>
                        <x-base.form-switch.input
                            class="ml-3 mr-0"
                            id="show-example-2"
                            type="checkbox"
                        />
                    </x-base.form-switch>
                </div>
                <div class="p-5">
                    <x-base.preview>
                        <div class="text-center">
                            <!-- BEGIN: Notification Content -->
                            <x-base.notification
                                class="flex"
                                id="success-notification-content"
                            >
                                <x-base.lucide
                                    class="text-success"
                                    icon="CheckCircle"
                                />
                                <div class="ml-4 mr-4">
                                    <div class="font-medium">Message Saved!</div>
                                    <div class="mt-1 text-slate-500">
                                        The message will be sent in 5 minutes.
                                    </div>
                                </div>
                            </x-base.notification>
                            <!-- END: Notification Content -->
                            <!-- BEGIN: Notification Toggle -->
                            <x-base.button
                                id="success-notification-toggle"
                                variant="primary"
                            >
                                Show Notification
                            </x-base.button>
                            <!-- END: Notification Toggle -->
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div class="text-center">
                                <!-- BEGIN: Notification Content -->
                                <x-base.notification
                                    class="flex"
                                    id="success-notification-content"
                                >
                                    <x-base.lucide
                                        class="text-success"
                                        icon="CheckCircle"
                                    />
                                    <div class="ml-4 mr-4">
                                        <div class="font-medium">Message Saved!</div>
                                        <div class="mt-1 text-slate-500">
                                            The message will be sent in 5 minutes.
                                        </div>
                                    </div>
                                </x-base.notification>
                                <!-- END: Notification Content -->
                                <!-- BEGIN: Notification Toggle -->
                                <x-base.button
                                    id="success-notification-toggle"
                                    variant="primary"
                                >
                                    Show Notification
                                </x-base.button>
                                <!-- END: Notification Toggle -->
                            </div>
                        </x-base.highlight>
                        <x-base.highlight
                            class="mt-5"
                            type="javascript"
                        >
                            // Success notification
                            $("#success-notification-toggle").on("click", function () {
                            Toastify({
                            node: $("#success-notification-content")
                            .clone()
                            .removeClass("hidden")[0],
                            duration: -1,
                            newWindow: true,
                            close: true,
                            gravity: "top",
                            position: "right",
                            stopOnFocus: true,
                            }).showToast();
                            });
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Success Notification -->
            <!-- BEGIN: Notification With Actions -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Notification With Actions
                    </h2>
                    <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label for="show-example-3">
                            Show example code
                        </x-base.form-switch.label>
                        <x-base.form-switch.input
                            class="ml-3 mr-0"
                            id="show-example-3"
                            type="checkbox"
                        />
                    </x-base.form-switch>
                </div>
                <div class="p-5">
                    <x-base.preview>
                        <div class="text-center">
                            <!-- BEGIN: Notification Content -->
                            <x-base.notification
                                class="flex"
                                id="notification-with-actions-content"
                            >
                                <x-base.lucide icon="HardDrive" />
                                <div class="ml-4 mr-4">
                                    <div class="font-medium">Storage Removed!</div>
                                    <div class="mt-1 text-slate-500">
                                        The server will restart in 30 seconds, don't make
                                        <br />
                                        changes during the update process!
                                    </div>
                                    <div class="mt-1.5 flex font-medium">
                                        <a
                                            class="text-primary dark:text-slate-400"
                                            href=""
                                        >
                                            Restart Now
                                        </a>
                                        <a
                                            class="ml-3 text-slate-500"
                                            href=""
                                        >
                                            Cancel
                                        </a>
                                    </div>
                                </div>
                            </x-base.notification>
                            <!-- END: Notification Content -->
                            <!-- BEGIN: Notification Toggle -->
                            <x-base.button
                                id="notification-with-actions-toggle"
                                variant="primary"
                            >
                                Show Notification
                            </x-base.button>
                            <!-- END: Notification Toggle -->
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div class="text-center">
                                <!-- BEGIN: Notification Content -->
                                <x-base.notification
                                    class="flex"
                                    id="notification-with-actions-content"
                                >
                                    <x-base.lucide icon="HardDrive" />
                                    <div class="ml-4 mr-4">
                                        <div class="font-medium">Storage Removed!</div>
                                        <div class="mt-1 text-slate-500">
                                            The server will restart in 30 seconds, don't make
                                            <br />
                                            changes during the update process!
                                        </div>
                                        <div class="mt-1.5 flex font-medium">
                                            <a
                                                class="text-primary dark:text-slate-400"
                                                href=""
                                            >
                                                Restart Now
                                            </a>
                                            <a
                                                class="ml-3 text-slate-500"
                                                href=""
                                            >
                                                Cancel
                                            </a>
                                        </div>
                                    </div>
                                </x-base.notification>
                                <!-- END: Notification Content -->
                                <!-- BEGIN: Notification Toggle -->
                                <x-base.button
                                    id="notification-with-actions-toggle"
                                    variant="primary"
                                >
                                    Show Notification
                                </x-base.button>
                                <!-- END: Notification Toggle -->
                            </div>
                        </x-base.highlight>
                        <x-base.highlight
                            class="mt-5"
                            type="javascript"
                        >
                            // Notification with actions
                            $("#notification-with-actions-toggle").on("click", function () {
                            Toastify({
                            node: $("#notification-with-actions-content")
                            .clone()
                            .removeClass("hidden")[0],
                            duration: -1,
                            newWindow: true,
                            close: true,
                            gravity: "top",
                            position: "right",
                            stopOnFocus: true,
                            }).showToast();
                            });
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- END: Notification With Actions -->
            <!-- BEGIN: Notification With Avatar -->
            <x-base.preview-component class="intro-y box">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Notification With Avatar
                    </h2>
                    <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label for="show-example-4">
                            Show example code
                        </x-base.form-switch.label>
                        <x-base.form-switch.input
                            class="ml-3 mr-0"
                            id="show-example-4"
                            type="checkbox"
                        />
                    </x-base.form-switch>
                </div>
                <div class="p-5">
                    <x-base.preview>
                        <div class="text-center">
                            <!-- BEGIN: Notification Content -->
                            <x-base.notification
                                class="flex"
                                id="notification-with-avatar-content"
                            >
                                <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-full">

                                </div>
                                <div class="ml-4 sm:mr-28">
                                    <div class="font-medium">
                                       pedro
                                    </div>
                                    <div class="mt-1 text-slate-500">
                                        See you later! 😃😃😃
                                    </div>
                                </div>
                                <a
                                    class="absolute top-0 bottom-0 right-0 flex items-center border-l border-slate-200/60 px-6 font-medium text-primary dark:border-darkmode-400 dark:text-slate-400"
                                    data-dismiss="notification"
                                    href="#"
                                >
                                    Reply
                                </a>
                            </x-base.notification>
                            <!-- END: Notification Content -->
                            <!-- BEGIN: Notification Toggle -->
                            <x-base.button
                                id="notification-with-avatar-toggle"
                                variant="primary"
                            >
                                Show Notification
                            </x-base.button>
                            <!-- END: Notification Toggle -->
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div class="text-center">
                                <!-- BEGIN: Notification Content -->
                                <x-base.notification
                                    class="flex"
                                    id="notification-with-avatar-content"
                                >
                                    <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-full">

                                    </div>
                                    <div class="ml-4 sm:mr-28">
                                        <div class="font-medium">
                                            Pedro
                                        </div>
                                        <div class="mt-1 text-slate-500">
                                            See you later! 😃😃😃
                                        </div>
                                    </div>
                                    <a
                                        class="absolute top-0 bottom-0 right-0 flex items-center border-l border-slate-200/60 px-6 font-medium text-primary dark:border-darkmode-400 dark:text-slate-400"
                                        data-dismiss="notification"
                                        href="#"
                                    >
                                        Reply
                                    </a>
                                </x-base.notification>
                                <!-- END: Notification Content -->
                                <!-- BEGIN: Notification Toggle -->
                                <x-base.button
                                    id="notification-with-avatar-toggle"
                                    variant="primary"
                                >
                                    Show Notification
                                </x-base.button>
                                <!-- END: Notification Toggle -->
                            </div>
                        </x-base.highlight>
                        <x-base.highlight
                            class="mt-5"
                            type="javascript"
                        >
                            // Notification with avatar
                            $("#notification-with-avatar-toggle").on("click", function () {
                            // Init toastify
                            let avatarNotification = Toastify({
                            node: $("#notification-with-avatar-content")
                            .clone()
                            .removeClass("hidden")[0],
                            duration: -1,
                            newWindow: true,
                            close: false,
                            gravity: "top",
                            position: "right",
                            stopOnFocus: true,
                            }).showToast();

                            // Close notification event
                            $(avatarNotification.toastElement)
                            .find(\'[data-dismiss="notification"]\')
                            .on("click", function () {
                            avatarNotification.hideToast();
                            });
                            });
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Notification With Avatar -->
            <!-- BEGIN: Notification With Split Buttons -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Notification With Split Buttons
                    </h2>
                    <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label for="show-example-5">
                            Show example code
                        </x-base.form-switch.label>
                        <x-base.form-switch.input
                            class="ml-3 mr-0"
                            id="show-example-5"
                            type="checkbox"
                        />
                    </x-base.form-switch>
                </div>
                <div class="p-5">
                    <x-base.preview>
                        <div class="text-center">
                            <!-- BEGIN: Notification Content -->
                            <x-base.notification
                                class="flex"
                                id="notification-with-split-buttons-content"
                            >
                                <div class="sm:mr-40">
                                    <div class="font-medium">
                                        Introducing new theme
                                    </div>
                                    <div class="mt-1 text-slate-500">
                                        Release version 2.3.3
                                    </div>
                                </div>
                                <div
                                    class="absolute top-0 bottom-0 right-0 flex flex-col border-l border-slate-200/60 dark:border-darkmode-400">
                                    <a
                                        class="flex flex-1 items-center justify-center border-b border-slate-200/60 px-6 font-medium text-primary dark:border-darkmode-400 dark:text-slate-400"
                                        href="#"
                                    >
                                        View Details
                                    </a>
                                    <a
                                        class="flex flex-1 items-center justify-center px-6 font-medium text-slate-500"
                                        data-dismiss="notification"
                                        href="#"
                                    >
                                        Dismiss
                                    </a>
                                </div>
                            </x-base.notification>
                            <!-- END: Notification Content -->
                            <!-- BEGIN: Notification Toggle -->
                            <x-base.button
                                id="notification-with-split-buttons-toggle"
                                variant="primary"
                            >
                                Show Notification
                            </x-base.button>
                            <!-- END: Notification Toggle -->
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div class="text-center">
                                <!-- BEGIN: Notification Content -->
                                <x-base.notification
                                    class="flex"
                                    id="notification-with-split-buttons-content"
                                >
                                    <div class="sm:mr-40">
                                        <div class="font-medium">
                                            Introducing new theme
                                        </div>
                                        <div class="mt-1 text-slate-500">
                                            Release version 2.3.3
                                        </div>
                                    </div>
                                    <div
                                        class="absolute top-0 bottom-0 right-0 flex flex-col border-l border-slate-200/60 dark:border-darkmode-400">
                                        <a
                                            class="flex flex-1 items-center justify-center border-b border-slate-200/60 px-6 font-medium text-primary dark:border-darkmode-400 dark:text-slate-400"
                                            href="#"
                                        >
                                            View Details
                                        </a>
                                        <a
                                            class="flex flex-1 items-center justify-center px-6 font-medium text-slate-500"
                                            data-dismiss="notification"
                                            href="#"
                                        >
                                            Dismiss
                                        </a>
                                    </div>
                                </x-base.notification>
                                <!-- END: Notification Content -->
                                <!-- BEGIN: Notification Toggle -->
                                <x-base.button
                                    id="notification-with-split-buttons-toggle"
                                    variant="primary"
                                >
                                    Show Notification
                                </x-base.button>
                                <!-- END: Notification Toggle -->
                            </div>
                        </x-base.highlight>
                        <x-base.highlight
                            class="mt-5"
                            type="javascript"
                        >
                            // Notification with split buttons
                            $("#notification-with-split-buttons-toggle").on("click", function () {
                            // Init toastify
                            let splitButtonsNotification = Toastify({
                            node: $("#notification-with-split-buttons-content")
                            .clone()
                            .removeClass("hidden")[0],
                            duration: -1,
                            newWindow: true,
                            close: false,
                            gravity: "top",
                            position: "right",
                            stopOnFocus: true,
                            }).showToast();

                            // Close notification event
                            $(splitButtonsNotification.toastElement)
                            .find(\'[data-dismiss="notification"]\')
                            .on("click", function () {
                            splitButtonsNotification.hideToast();
                            });
                            });
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Notification With Split Buttons -->
            <!-- BEGIN: Notification With Buttons Below -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Notification With Buttons Below
                    </h2>
                    <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label for="show-example-6">
                            Show example code
                        </x-base.form-switch.label>
                        <x-base.form-switch.input
                            class="ml-3 mr-0"
                            id="show-example-6"
                            type="checkbox"
                        />
                    </x-base.form-switch>
                </div>
                <div class="p-5">
                    <x-base.preview>
                        <div class="text-center">
                            <!-- BEGIN: Notification Content -->
                            <x-base.notification
                                class="flex"
                                id="notification-with-buttons-below-content"
                            >
                                <x-base.lucide icon="FileText" />
                                <div class="ml-4 mr-5 sm:mr-20">
                                    <div class="font-medium">
                                        Pedro
                                    </div>
                                    <div class="mt-1 text-slate-500">
                                        Sent you new documents.
                                    </div>
                                    <div class="mt-2.5">
                                        <x-base.button
                                            class="mr-2 px-2 py-1"
                                            href=""
                                            variant="primary"
                                            as="a"
                                        >
                                            Preview
                                        </x-base.button>
                                        <x-base.button
                                            class="px-2 py-1"
                                            href=""
                                            variant="outline-secondary"
                                            as="a"
                                        >
                                            Download
                                        </x-base.button>
                                    </div>
                                </div>
                            </x-base.notification>
                            <!-- END: Notification Content -->
                            <!-- BEGIN: Notification Toggle -->
                            <x-base.button
                                id="notification-with-buttons-below-toggle"
                                variant="primary"
                            >
                                Show Notification
                            </x-base.button>
                            <!-- END: Notification Toggle -->
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div class="text-center">
                                <!-- BEGIN: Notification Content -->
                                <x-base.notification
                                    class="flex"
                                    id="notification-with-buttons-below-content"
                                >
                                    <x-base.lucide icon="FileText" />
                                    <div class="ml-4 mr-5 sm:mr-20">
                                        <div class="font-medium">
                                            Pedro
                                        </div>
                                        <div class="mt-1 text-slate-500">
                                            Sent you new documents.
                                        </div>
                                        <div class="mt-2.5">
                                            <x-base.button
                                                class="mr-2 px-2 py-1"
                                                href=""
                                                variant="primary"
                                                as="a"
                                            >
                                                Preview
                                            </x-base.button>
                                            <x-base.button
                                                class="px-2 py-1"
                                                href=""
                                                variant="outline-secondary"
                                                as="a"
                                            >
                                                Download
                                            </x-base.button>
                                        </div>
                                    </div>
                                </x-base.notification>
                                <!-- END: Notification Content -->
                                <!-- BEGIN: Notification Toggle -->
                                <x-base.button
                                    id="notification-with-buttons-below-toggle"
                                    variant="primary"
                                >
                                    Show Notification
                                </x-base.button>
                                <!-- END: Notification Toggle -->
                            </div>
                        </x-base.highlight>
                        <x-base.highlight
                            class="mt-5"
                            type="javascript"
                        >
                            // Notification with buttons below
                            $("#notification-with-buttons-below-toggle").on("click", function () {
                            // Init toastify
                            Toastify({
                            node: $("#notification-with-buttons-below-content")
                            .clone()
                            .removeClass("hidden")[0],
                            duration: -1,
                            newWindow: true,
                            close: true,
                            gravity: "top",
                            position: "right",
                            stopOnFocus: true,
                            }).showToast();
                            });
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Notification With Buttons Below -->
        </div>
    </div>

    @if(false)
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @once
        @push('vendors')
            @vite('resources/js/vendor/toastify/index.js')
        @endpush
    @endonce

    @push('scripts')

    <script>
        window.onload = function() {
            Toastify({
                node: $("#success-notification-content")
                    .clone()
                    .removeClass("hidden")[0],
                duration: -1,
                newWindow: true,
                close: true,
                gravity: "top",
                position: "right",
                stopOnFocus: true,
            }).showToast();
        }
    </script>
    @endpush

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
    @endif
</x-app-layout>
