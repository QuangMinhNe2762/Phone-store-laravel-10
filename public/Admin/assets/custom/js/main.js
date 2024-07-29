//* slider show image
$("#image").change(function (event) {
    var file = event.target.files[0];
    var url = URL.createObjectURL(file);
    $("#image_blank").html(
        '<img src="' + url + '" width="100px" height="100px">'
    );
});
//* edit slider
function getNumbersInString(str) {
    let matches = str.match(/\d+/g);
    return matches ? matches.map(Number) : [];
}
function send_id_slider(event) {
    //todo get last value of id
    var id_slider = getNumbersInString(event.target.id);
    $.ajax({
        processData: false,
        contentType: false,
        type: "GET",
        dataType: "JSON",
        data: id_slider,
        url: "/sliders/" + id_slider + "/edit",
        success: function (result) {
            $("#title").val(result.slider.title);
            $("#description").val("dădawdwadwadwadwadaww");
            $("#image_blank_edit").html(
                '<img src="' +
                    result.slider.image +
                    '" width="100px" height="100px">'
            );
            $("#edit_form").attr("action", "/sliders/" + id_slider);
            if (result.slider.status == 0) {
                $("#status").append(
                    '<option value="0" selected>Visible</option>'
                );
                $("#status").append('<option value="1">Hidden</option>');
            } else {
                $("#status").append('<option value="0">Visible</option>');
                $("#status").append(
                    '<option value="1" selected>Hidden</option>'
                );
            }
        },
    });
}
$("#image_edit").change(function (event) {
    var file = event.target.files[0];
    var url = URL.createObjectURL(file);
    $("#image_blank_edit").html(
        '<img src="' + url + '" width="100px" height="100px">'
    );
});
function visible_image_product(event) {
    //todo get last value of id
    var id_image_product = getNumbersInString(event.target.id);
    if (event.target.files.length > 0) {
        var file = event.target.files[0];
        var url = URL.createObjectURL(file);
        console.log(url);
        $("#image_product_blank" + id_image_product).html(
            '<img src="' + url + '" style="width: 100px; height: 100px;">'
        );
        document.getElementById(
            "button_update_product" + id_image_product
        ).style.visibility = "visible";
    } else {
        // $('#image_product_blank' + id_image_product).html();
        document.getElementById(
            "button_update_product" + id_image_product
        ).style.visibility = "hidden";
    }
}
//* FE
function modalquickview(id) {
    $.ajax({
        type: "GET",
        dataType: "JSON",
        data: id,
        url: "/quickview/" + id,
        success: function (result) {
            result.product_images.forEach((item, index) => {
                if (index == 1) {
                    $("#productModal").append(
                        `<div class="tns-item tns-slide-active" id="productModal-item${index}">
                                                <div
                                                    style="background-image: url(&quot;${item.image}&quot;); background-position: 4.7619% 78.4264%;">
                                                    <!-- img -->
                                                    <img src="${item.image}" alt="">
                                                </div>
                                            </div>`
                    );
                } else {
                    $("#productModal").append(
                        `<div class="tns-item" id="productModal-item${index}">
                                                <div
                                                    style="background-image: url(&quot;${item.image}&quot;); background-position: 4.7619% 78.4264%;">
                                                    <!-- img -->
                                                    <img src="${item.image}" alt="">
                                                </div>
                                            </div>`
                    );
                }
            });
            result.product_images.forEach((item, index) => {
                if (index == 1) {
                    $("#productModalThumbnails").append(
                        `<div class="col-3 tns-nav-active" data-nav="${index}"
                                         aria-label="Carousel Page ${
                                             index + 1
                                         } (Current Slide)"
                                         aria-controls="productModal">
                                         <div class="thumbnails-img">
                                             <!-- img -->
                                             <img src="${item.image}" alt="">
                                         </div>
                                     </div>`
                    );
                } else {
                    $("#productModalThumbnails").append(
                        `<div class="col-3" data-nav="${index}" tabindex="-1"
                                         aria-label="Carousel Page ${
                                             index + 1
                                         }" aria-controls="productModal">
                                         <div class="thumbnails-img">
                                             <!-- img -->
                                             <img src="${item.image}" alt="">
                                         </div>
                                     </div>`
                    );
                }
            });
        },
    });
}
// function selectPrice(category) {
//     var value = $("#selectPrice").val();
//     console.log(typeof value);
//     $.ajax({
//         processData: false,
//         contentType: false,
//         type: "GET",
//         dataType: "JSON",
//         data: value,
//         url: "/category/" + category + "/filter/" + value,
//         success: function (result) {
//             console.log(result.products);
//         },
//     });
// }
// $("#selectPrice").change(function () {
//     var value = $(this).val();
//     $.ajax({
//         type: "GET",
//         dataType: "JSON",
//         data: value,
//         url: "/category/filter/" + value,
//         success: function (result) {
//             console.log(result);
//         },
//     });
// });
function getCurrentURL() {
    return window.location.href;
}
$("#searchUserText").on("keypress", function (e) {
    if (e.key === "Enter") {
        var pagination = document.getElementById("pagination");
        var input = document.getElementById("searchUserText");
        var value = input.value;
        if (value == "") {
            value = "all";
        }
        console.log(value);
        $.ajax({
            type: "GET",
            dataType: "JSON",
            data: value,
            url: "/searchUser/" + value,
            success: function (result) {
                console.log(result);
                var tbl = document.getElementById("table"); // Get the table
                if (tbl.tBodies.length > 0) {
                    tbl.removeChild(tbl.getElementsByTagName("tbody")[0]);
                }
                pagination.innerHTML = "";
                const urlDefault = getCurrentURL();
                if (!result.error) {
                    var tbd = tbl.createTBody();
                    result.users.data.forEach((user) => {
                        tbd.insertAdjacentHTML(
                            "beforeend",
                            `
<tr>
                    <td>
                        <span class="fw-medium">${user.id}</span>
                    </td>
                    <td><a href="${
                        urlDefault + "/" + user.id
                    }" target="_blank">${user.name}</a></td>
                    <td>
                        <span class="fw-medium">${user.email}</span>
                    </td>
                    <td><span
                            class="badge ${
                                user.role_as == 1
                                    ? "bg-label-primary"
                                    : "bg-label-warning"
                            } me-1">${
                                user.role_as == 1 ? "Admin" : "User"
                            }</span>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a href="${
                                    urlDefault + "/" + user.id + "edit"
                                }" class="dropdown-item"><i
                                        class="bx bx-edit-alt me-1"></i>
                                    Edit</a>
                                <a href="${
                                    urlDefault.replace("users", "") +
                                    "/destroy/" +
                                    user.id
                                }" class="dropdown-item"><i
                                        class="bx bx-trash me-1"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                    `
                        );
                    });
                    pagination.innerHTML = result.pagination;
                    attachPaginationClickEvent();
                }
            },
        });
    }
});
$("#btnUserSearch").click(function () {
    var value = $("#searchUserText").val();
    var pagination = document.getElementById("pagination");
    if (value == "") {
        value = "all";
    }
    $.ajax({
        type: "GET",
        dataType: "JSON",
        data: value,
        url: "/searchUser/" + value,
        success: function (result) {
            var tbl = document.getElementById("table"); // Get the table
            tbl.removeChild(tbl.getElementsByTagName("tbody")[0]);
            pagination.innerHTML = "";
            const urlDefault = getCurrentURL();
            if (!result.error) {
                var tbd = tbl.createTBody();
                result.users.data.forEach((user) => {
                    tbd.insertAdjacentHTML(
                        "beforeend",
                        `
<tr>
                    <td>
                        <span class="fw-medium">${user.id}</span>
                    </td>
                    <td><a href="${
                        urlDefault + "/" + user.id
                    }" target="_blank">${user.name}</a></td>
                    <td>
                        <span class="fw-medium">${user.email}</span>
                    </td>
                    <td><span
                            class="badge ${
                                user.role_as == 1
                                    ? "bg-label-primary"
                                    : "bg-label-warning"
                            } me-1">${
                            user.role_as == 1 ? "Admin" : "User"
                        }</span>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a href="${
                                    urlDefault + "/" + user.id + "edit"
                                }" class="dropdown-item"><i
                                        class="bx bx-edit-alt me-1"></i>
                                    Edit</a>
                                <a href="${
                                    urlDefault.replace("users", "") +
                                    "/destroy/" +
                                    user.id
                                }" class="dropdown-item"><i
                                        class="bx bx-trash me-1"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                    `
                    );
                });
                pagination.innerHTML = result.pagination;
                attachPaginationClickEvent();
            }
        },
    });
});
function attachPaginationClickEvent() {
    var paginationLinks = document.querySelectorAll("#pagination a");
    paginationLinks.forEach(function (link) {
        link.addEventListener("click", function (e) {
            e.preventDefault();
            var pageUrl = e.target.href;
            fetch(pageUrl, {
                headers: {
                    "X-Requested-With": "XMLHttpRequest",
                },
            })
                .then((response) => response.json())
                .then((data) => {
                    // Assuming data contains 'tableContent' and 'pagination' HTML
                    var tbl = document.getElementById("table");
                    tbl.removeChild(tbl.getElementsByTagName("tbody")[0]); // Remove current tbody
                    var tbd = tbl.createTBody();
                    const urlDefault = getCurrentURL();
                    data.users.data.forEach((user) => {
                        tbd.insertAdjacentHTML(
                            "beforeend",
                            `
<tr>
                    <td>
                        <span class="fw-medium">${user.id}</span>
                    </td>
                    <td><a href="${
                        urlDefault + "/" + user.id
                    }" target="_blank">${user.name}</a></td>
                    <td>
                        <span class="fw-medium">${user.email}</span>
                    </td>
                    <td><span
                            class="badge ${
                                user.role_as == 1
                                    ? "bg-label-primary"
                                    : "bg-label-warning"
                            } me-1">${
                                user.role_as == 1 ? "Admin" : "User"
                            }</span>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a href="${
                                    urlDefault + "/" + user.id + "edit"
                                }" class="dropdown-item"><i
                                        class="bx bx-edit-alt me-1"></i>
                                    Edit</a>
                                <a href="${
                                    urlDefault.replace("users", "") +
                                    "destroy/" +
                                    user.id
                                }" class="dropdown-item"><i
                                        class="bx bx-trash me-1"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                    `
                        );
                    });
                    var pagination = document.getElementById("pagination");
                    pagination.innerHTML = data.pagination; // Update pagination links
                    attachPaginationClickEvent(); // Reattach event listeners to new pagination links
                })
                .catch((error) => console.error("Error:", error));
        });
    });
}
$("#selectstatusslider").change(function (e) {
    var pagination = document.getElementById("pagination");
    var valueStatus = e.target.value;
    $.ajax({
        type: "GET",
        dataType: "JSON",
        data: valueStatus,
        url: "/status/" + valueStatus,
        success: function (result) {
            var tbl = document.getElementById("table"); // Get the table
            if (tbl.tBodies.length > 0) {
                tbl.removeChild(tbl.getElementsByTagName("tbody")[0]);
            }
            pagination.innerHTML = "";
            if (!result.error) {
                const urlDefault = getCurrentURL();
                var tbd = tbl.createTBody();
                result.sliders.data.forEach((slider) => {
                    tbd.insertAdjacentHTML(
                        "beforeend",
                        `<tr>
                    <td>
                        <span class="fw-medium">${slider.id}</span>
                    </td>
                    <td>${slider.title}</td>
                    <td>
                        <span class="fw-medium">${slider.description.substring(
                            0,
                            21
                        )}</span>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="${
                                slider.image
                            }" height="32" width="32" class="me-2" />
                        </div>
                    </td>
                    <td><span
                            class="badge ${
                                slider.status == 1
                                    ? "bg-label-danger"
                                    : "bg-label-success"
                            } me-1">${
                            slider.status == 1 ? "Hidden" : "Visible"
                        }</span>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a type="button" id="edit_button${
                                    slider.id
                                }" onclick="send_id_slider(event)"
                                    class="dropdown-item" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop_edit"><i class="bx bx-edit-alt me-1"></i>
                                    Edit</a>
                                <a type="button" href="${
                                    urlDefault.replace("sliders", "") +
                                    "delete/" +
                                    slider.id
                                }" class="dropdown-item"><i
                                        class="bx bx-trash me-1"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>`
                    );
                });
                pagination.innerHTML = result.pagination;
                attachPaginationSliderClickEvent();
            } else {
                console.log(result.session);
            }
        },
    });
});
$("#searchSliderText").on("keypress", function (e) {
    if (e.key === "Enter") {
        var pagination = document.getElementById("pagination");
        var input = document.getElementById("searchSliderText");
        var value = input.value;
        if (value == "") {
            value = "all";
        }
        console.log(value);
        $.ajax({
            type: "GET",
            dataType: "JSON",
            data: value,
            url: "/searchSlider/" + value,
            success: function (result) {
                console.log(result);
                var tbl = document.getElementById("table"); // Get the table
                if (tbl.tBodies.length > 0) {
                    tbl.removeChild(tbl.getElementsByTagName("tbody")[0]);
                }
                pagination.innerHTML = "";
                const urlDefault = getCurrentURL();
                if (!result.error) {
                    var tbd = tbl.createTBody();
                    result.sliders.data.forEach((slider) => {
                        tbd.insertAdjacentHTML(
                            "beforeend",
                            `<tr>
                    <td>
                        <span class="fw-medium">${slider.id}</span>
                    </td>
                    <td>${slider.title}</td>
                    <td>
                        <span class="fw-medium">${slider.description.substring(
                            0,
                            21
                        )}</span>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="${
                                slider.image
                            }" height="32" width="32" class="me-2" />
                        </div>
                    </td>
                    <td><span
                            class="badge ${
                                slider.status == 1
                                    ? "bg-label-danger"
                                    : "bg-label-success"
                            } me-1">${
                                slider.status == 1 ? "Hidden" : "Visible"
                            }</span>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a type="button" id="edit_button${
                                    slider.id
                                }" onclick="send_id_slider(event)"
                                    class="dropdown-item" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop_edit"><i class="bx bx-edit-alt me-1"></i>
                                    Edit</a>
                                <a type="button" href="${
                                    urlDefault.replace("sliders", "") +
                                    "delete/" +
                                    slider.id
                                }" class="dropdown-item"><i
                                        class="bx bx-trash me-1"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>`
                        );
                    });
                    pagination.innerHTML = result.pagination;
                    attachPaginationSliderClickEvent();
                }
            },
        });
    }
});
$("#btnSliderSearch").click(function () {
    var value = $("#searchSliderText").val();
    var pagination = document.getElementById("pagination");
    if (value == "") {
        value = "all";
    }
    $.ajax({
        type: "GET",
        dataType: "JSON",
        data: value,
        url: "/searchSlider/" + value,
        success: function (result) {
            console.log(result);
            var tbl = document.getElementById("table"); // Get the table
            if (tbl.tBodies.length > 0) {
                tbl.removeChild(tbl.getElementsByTagName("tbody")[0]);
            }
            pagination.innerHTML = "";
            const urlDefault = getCurrentURL();
            if (!result.error) {
                var tbd = tbl.createTBody();
                result.sliders.data.forEach((slider) => {
                    tbd.insertAdjacentHTML(
                        "beforeend",
                        `<tr>
                    <td>
                        <span class="fw-medium">${slider.id}</span>
                    </td>
                    <td>${slider.title}</td>
                    <td>
                        <span class="fw-medium">${slider.description.substring(
                            0,
                            21
                        )}</span>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="${
                                slider.image
                            }" height="32" width="32" class="me-2" />
                        </div>
                    </td>
                    <td><span
                            class="badge ${
                                slider.status == 1
                                    ? "bg-label-danger"
                                    : "bg-label-success"
                            } me-1">${
                            slider.status == 1 ? "Hidden" : "Visible"
                        }</span>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a type="button" id="edit_button${
                                    slider.id
                                }" onclick="send_id_slider(event)"
                                    class="dropdown-item" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop_edit"><i class="bx bx-edit-alt me-1"></i>
                                    Edit</a>
                                <a type="button" href="${
                                    urlDefault.replace("sliders", "") +
                                    "delete/" +
                                    slider.id
                                }" class="dropdown-item"><i
                                        class="bx bx-trash me-1"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>`
                    );
                });
                pagination.innerHTML = result.pagination;
                attachPaginationSliderClickEvent();
            }
        },
    });
});
function attachPaginationSliderClickEvent() {
    var paginationLinks = document.querySelectorAll("#pagination a");
    paginationLinks.forEach(function (link) {
        link.addEventListener("click", function (e) {
            e.preventDefault();
            var pageUrl = e.target.href;
            fetch(pageUrl, {
                headers: {
                    "X-Requested-With": "XMLHttpRequest",
                },
            })
                .then((response) => response.json())
                .then((data) => {
                    // Assuming data contains 'tableContent' and 'pagination' HTML
                    var tbl = document.getElementById("table");
                    tbl.removeChild(tbl.getElementsByTagName("tbody")[0]); // Remove current tbody
                    var tbd = tbl.createTBody();
                    const urlDefault = getCurrentURL();
                    data.sliders.data.forEach((slider) => {
                        tbd.insertAdjacentHTML(
                            "beforeend",
                            `<tr>
                    <td>
                        <span class="fw-medium">${slider.id}</span>
                    </td>
                    <td>${slider.title}</td>
                    <td>
                        <span class="fw-medium">${slider.description.substring(
                            0,
                            21
                        )}</span>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="${
                                slider.image
                            }" height="32" width="32" class="me-2" />
                        </div>
                    </td>
                    <td><span
                            class="badge ${
                                slider.status == 1
                                    ? "bg-label-danger"
                                    : "bg-label-success"
                            } me-1">${
                                slider.status == 1 ? "Hidden" : "Visible"
                            }</span>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a type="button" id="edit_button${
                                    slider.id
                                }" onclick="send_id_slider(event)"
                                    class="dropdown-item" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop_edit"><i class="bx bx-edit-alt me-1"></i>
                                    Edit</a>
                                <a type="button" href="${
                                    urlDefault.replace("sliders", "") +
                                    "delete/" +
                                    slider.id
                                }" class="dropdown-item"><i
                                        class="bx bx-trash me-1"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>`
                        );
                    });
                    var pagination = document.getElementById("pagination");
                    pagination.innerHTML = data.pagination; // Update pagination links
                    attachPaginationSliderClickEvent(); // Reattach event listeners to new pagination links
                })
                .catch((error) => console.error("Error:", error));
        });
    });
}
