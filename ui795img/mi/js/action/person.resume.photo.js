define(function(require, exports, module) {
    var $ = require("$"),
        ui = require("ui.base"),
        util = require("util"),
        person = require("action.person"),
        resume = require("action.person.resume");


    //--获取EXIF信息。
    //--读取文件。
    function getexif() {
        var debug = false;

        var ExifTags = {
            // version tags
            0x9000: "ExifVersion", // EXIF version
            0xA000: "FlashpixVersion", // Flashpix format version

            // colorspace tags
            0xA001: "ColorSpace", // Color space information tag

            // image configuration
            0xA002: "PixelXDimension", // Valid width of meaningful image
            0xA003: "PixelYDimension", // Valid height of meaningful image
            0x9101: "ComponentsConfiguration", // Information about channels
            0x9102: "CompressedBitsPerPixel", // Compressed bits per pixel

            // user information
            0x927C: "MakerNote", // Any desired information written by the manufacturer
            0x9286: "UserComment", // Comments by user

            // related file
            0xA004: "RelatedSoundFile", // Name of related sound file

            // date and time
            0x9003: "DateTimeOriginal", // Date and time when the original image was generated
            0x9004: "DateTimeDigitized", // Date and time when the image was stored digitally
            0x9290: "SubsecTime", // Fractions of seconds for DateTime
            0x9291: "SubsecTimeOriginal", // Fractions of seconds for DateTimeOriginal
            0x9292: "SubsecTimeDigitized", // Fractions of seconds for DateTimeDigitized

            // picture-taking conditions
            0x829A: "ExposureTime", // Exposure time (in seconds)
            0x829D: "FNumber", // F number
            0x8822: "ExposureProgram", // Exposure program
            0x8824: "SpectralSensitivity", // Spectral sensitivity
            0x8827: "ISOSpeedRatings", // ISO speed rating
            0x8828: "OECF", // Optoelectric conversion factor
            0x9201: "ShutterSpeedValue", // Shutter speed
            0x9202: "ApertureValue", // Lens aperture
            0x9203: "BrightnessValue", // Value of brightness
            0x9204: "ExposureBias", // Exposure bias
            0x9205: "MaxApertureValue", // Smallest F number of lens
            0x9206: "SubjectDistance", // Distance to subject in meters
            0x9207: "MeteringMode", // Metering mode
            0x9208: "LightSource", // Kind of light source
            0x9209: "Flash", // Flash status
            0x9214: "SubjectArea", // Location and area of main subject
            0x920A: "FocalLength", // Focal length of the lens in mm
            0xA20B: "FlashEnergy", // Strobe energy in BCPS
            0xA20C: "SpatialFrequencyResponse", //
            0xA20E: "FocalPlaneXResolution", // Number of pixels in width direction per FocalPlaneResolutionUnit
            0xA20F: "FocalPlaneYResolution", // Number of pixels in height direction per FocalPlaneResolutionUnit
            0xA210: "FocalPlaneResolutionUnit", // Unit for measuring FocalPlaneXResolution and FocalPlaneYResolution
            0xA214: "SubjectLocation", // Location of subject in image
            0xA215: "ExposureIndex", // Exposure index selected on camera
            0xA217: "SensingMethod", // Image sensor type
            0xA300: "FileSource", // Image source (3 == DSC)
            0xA301: "SceneType", // Scene type (1 == directly photographed)
            0xA302: "CFAPattern", // Color filter array geometric pattern
            0xA401: "CustomRendered", // Special processing
            0xA402: "ExposureMode", // Exposure mode
            0xA403: "WhiteBalance", // 1 = auto white balance, 2 = manual
            0xA404: "DigitalZoomRation", // Digital zoom ratio
            0xA405: "FocalLengthIn35mmFilm", // Equivalent foacl length assuming 35mm film camera (in mm)
            0xA406: "SceneCaptureType", // Type of scene
            0xA407: "GainControl", // Degree of overall image gain adjustment
            0xA408: "Contrast", // Direction of contrast processing applied by camera
            0xA409: "Saturation", // Direction of saturation processing applied by camera
            0xA40A: "Sharpness", // Direction of sharpness processing applied by camera
            0xA40B: "DeviceSettingDescription", //
            0xA40C: "SubjectDistanceRange", // Distance to subject

            // other tags
            0xA005: "InteroperabilityIFDPointer",
            0xA420: "ImageUniqueID" // Identifier assigned uniquely to each image
        };

        var TiffTags = {
            0x0100: "ImageWidth",
            0x0101: "ImageHeight",
            0x8769: "ExifIFDPointer",
            0x8825: "GPSInfoIFDPointer",
            0xA005: "InteroperabilityIFDPointer",
            0x0102: "BitsPerSample",
            0x0103: "Compression",
            0x0106: "PhotometricInterpretation",
            0x0112: "Orientation",
            0x0115: "SamplesPerPixel",
            0x011C: "PlanarConfiguration",
            0x0212: "YCbCrSubSampling",
            0x0213: "YCbCrPositioning",
            0x011A: "XResolution",
            0x011B: "YResolution",
            0x0128: "ResolutionUnit",
            0x0111: "StripOffsets",
            0x0116: "RowsPerStrip",
            0x0117: "StripByteCounts",
            0x0201: "JPEGInterchangeFormat",
            0x0202: "JPEGInterchangeFormatLength",
            0x012D: "TransferFunction",
            0x013E: "WhitePoint",
            0x013F: "PrimaryChromaticities",
            0x0211: "YCbCrCoefficients",
            0x0214: "ReferenceBlackWhite",
            0x0132: "DateTime",
            0x010E: "ImageDescription",
            0x010F: "Make",
            0x0110: "Model",
            0x0131: "Software",
            0x013B: "Artist",
            0x8298: "Copyright"
        };

        var GPSTags = {
            0x0000: "GPSVersionID",
            0x0001: "GPSLatitudeRef",
            0x0002: "GPSLatitude",
            0x0003: "GPSLongitudeRef",
            0x0004: "GPSLongitude",
            0x0005: "GPSAltitudeRef",
            0x0006: "GPSAltitude",
            0x0007: "GPSTimeStamp",
            0x0008: "GPSSatellites",
            0x0009: "GPSStatus",
            0x000A: "GPSMeasureMode",
            0x000B: "GPSDOP",
            0x000C: "GPSSpeedRef",
            0x000D: "GPSSpeed",
            0x000E: "GPSTrackRef",
            0x000F: "GPSTrack",
            0x0010: "GPSImgDirectionRef",
            0x0011: "GPSImgDirection",
            0x0012: "GPSMapDatum",
            0x0013: "GPSDestLatitudeRef",
            0x0014: "GPSDestLatitude",
            0x0015: "GPSDestLongitudeRef",
            0x0016: "GPSDestLongitude",
            0x0017: "GPSDestBearingRef",
            0x0018: "GPSDestBearing",
            0x0019: "GPSDestDistanceRef",
            0x001A: "GPSDestDistance",
            0x001B: "GPSProcessingMethod",
            0x001C: "GPSAreaInformation",
            0x001D: "GPSDateStamp",
            0x001E: "GPSDifferential"
        };

        var StringValues = {
            ExposureProgram: {
                0: "Not defined",
                1: "Manual",
                2: "Normal program",
                3: "Aperture priority",
                4: "Shutter priority",
                5: "Creative program",
                6: "Action program",
                7: "Portrait mode",
                8: "Landscape mode"
            },
            MeteringMode: {
                0: "Unknown",
                1: "Average",
                2: "CenterWeightedAverage",
                3: "Spot",
                4: "MultiSpot",
                5: "Pattern",
                6: "Partial",
                255: "Other"
            },
            LightSource: {
                0: "Unknown",
                1: "Daylight",
                2: "Fluorescent",
                3: "Tungsten (incandescent light)",
                4: "Flash",
                9: "Fine weather",
                10: "Cloudy weather",
                11: "Shade",
                12: "Daylight fluorescent (D 5700 - 7100K)",
                13: "Day white fluorescent (N 4600 - 5400K)",
                14: "Cool white fluorescent (W 3900 - 4500K)",
                15: "White fluorescent (WW 3200 - 3700K)",
                17: "Standard light A",
                18: "Standard light B",
                19: "Standard light C",
                20: "D55",
                21: "D65",
                22: "D75",
                23: "D50",
                24: "ISO studio tungsten",
                255: "Other"
            },
            Flash: {
                0x0000: "Flash did not fire",
                0x0001: "Flash fired",
                0x0005: "Strobe return light not detected",
                0x0007: "Strobe return light detected",
                0x0009: "Flash fired, compulsory flash mode",
                0x000D: "Flash fired, compulsory flash mode, return light not detected",
                0x000F: "Flash fired, compulsory flash mode, return light detected",
                0x0010: "Flash did not fire, compulsory flash mode",
                0x0018: "Flash did not fire, auto mode",
                0x0019: "Flash fired, auto mode",
                0x001D: "Flash fired, auto mode, return light not detected",
                0x001F: "Flash fired, auto mode, return light detected",
                0x0020: "No flash function",
                0x0041: "Flash fired, red-eye reduction mode",
                0x0045: "Flash fired, red-eye reduction mode, return light not detected",
                0x0047: "Flash fired, red-eye reduction mode, return light detected",
                0x0049: "Flash fired, compulsory flash mode, red-eye reduction mode",
                0x004D: "Flash fired, compulsory flash mode, red-eye reduction mode, return light not detected",
                0x004F: "Flash fired, compulsory flash mode, red-eye reduction mode, return light detected",
                0x0059: "Flash fired, auto mode, red-eye reduction mode",
                0x005D: "Flash fired, auto mode, return light not detected, red-eye reduction mode",
                0x005F: "Flash fired, auto mode, return light detected, red-eye reduction mode"
            },
            SensingMethod: {
                1: "Not defined",
                2: "One-chip color area sensor",
                3: "Two-chip color area sensor",
                4: "Three-chip color area sensor",
                5: "Color sequential area sensor",
                7: "Trilinear sensor",
                8: "Color sequential linear sensor"
            },
            SceneCaptureType: {
                0: "Standard",
                1: "Landscape",
                2: "Portrait",
                3: "Night scene"
            },
            SceneType: {
                1: "Directly photographed"
            },
            CustomRendered: {
                0: "Normal process",
                1: "Custom process"
            },
            WhiteBalance: {
                0: "Auto white balance",
                1: "Manual white balance"
            },
            GainControl: {
                0: "None",
                1: "Low gain up",
                2: "High gain up",
                3: "Low gain down",
                4: "High gain down"
            },
            Contrast: {
                0: "Normal",
                1: "Soft",
                2: "Hard"
            },
            Saturation: {
                0: "Normal",
                1: "Low saturation",
                2: "High saturation"
            },
            Sharpness: {
                0: "Normal",
                1: "Soft",
                2: "Hard"
            },
            SubjectDistanceRange: {
                0: "Unknown",
                1: "Macro",
                2: "Close view",
                3: "Distant view"
            },
            FileSource: {
                3: "DSC"
            },
            Components: {
                0: "",
                1: "Y",
                2: "Cb",
                3: "Cr",
                4: "R",
                5: "G",
                6: "B"
            }
        };

        function addEvent(element, event, handler) {
            if (element.addEventListener) {
                element.addEventListener(event, handler, false);
            } else if (element.attachEvent) {
                element.attachEvent("on" + event, handler);
            }
        }

        function imageHasData(img) {
            return !!(img.exifdata);
        }

        function base64ToArrayBuffer(base64, contentType) {
            contentType = contentType || base64.match(/^data\:([^\;]+)\;base64,/mi)[1] || ''; // e.g. 'data:image/jpeg;base64,...' => 'image/jpeg'
            base64 = base64.replace(/^data\:([^\;]+)\;base64,/gmi, '');
            var binary = atob(base64);
            var len = binary.length;
            var buffer = new ArrayBuffer(len);
            var view = new Uint8Array(buffer);
            for (var i = 0; i < len; i++) {
                view[i] = binary.charCodeAt(i);
            }
            return buffer;
        }

        function objectURLToBlob(url, callback) {
            var http = new XMLHttpRequest();
            http.open("GET", url, true);
            http.responseType = "blob";
            http.onload = function(e) {
                if (this.status == 200 || this.status === 0) {
                    callback(this.response);
                }
            };
            http.send();
        }

        function getImageData(img, callback) {
            function handleBinaryFile(binFile) {
                var data = findEXIFinJPEG(binFile);
                var iptcdata = findIPTCinJPEG(binFile);
                img.exifdata = data || {};
                img.iptcdata = iptcdata || {};
                if (callback) {
                    callback.call(img);
                }
            }

            if (img instanceof Image || img instanceof HTMLImageElement) {
                if (/^data\:/i.test(img.src)) { // Data URI
                    var arrayBuffer = base64ToArrayBuffer(img.src);
                    handleBinaryFile(arrayBuffer);

                } else if (/^blob\:/i.test(img.src)) { // Object URL
                    var fileReader = new FileReader();
                    fileReader.onload = function(e) {
                        handleBinaryFile(e.target.result);
                    };
                    objectURLToBlob(img.src, function(blob) {
                        fileReader.readAsArrayBuffer(blob);
                    });
                } else {
                    var http = new XMLHttpRequest();
                    http.onload = function() {
                        if (http.status == "200") {
                            handleBinaryFile(http.response);
                        } else {
                            throw "Could not load image";
                        }
                        http = null;
                    };
                    http.open("GET", img.src, true);
                    http.responseType = "arraybuffer";
                    http.send(null);
                }
            } else if (window.FileReader && (img instanceof window.Blob || img instanceof window.File)) {
                var fileReader = new FileReader();
                fileReader.onload = function(e) {
                    if (debug) console.log("Got file of length " + e.target.result.byteLength);
                    handleBinaryFile(e.target.result);
                };

                fileReader.readAsArrayBuffer(img);
            }
        }

        function findEXIFinJPEG(file) {
            var dataView = new DataView(file);

            if (debug) console.log("Got file of length " + file.byteLength);
            if ((dataView.getUint8(0) != 0xFF) || (dataView.getUint8(1) != 0xD8)) {
                if (debug) console.log("Not a valid JPEG");
                return false; // not a valid jpeg
            }

            var offset = 2,
                length = file.byteLength,
                marker;

            while (offset < length) {
                if (dataView.getUint8(offset) != 0xFF) {
                    if (debug) console.log("Not a valid marker at offset " + offset + ", found: " + dataView.getUint8(offset));
                    return false; // not a valid marker, something is wrong
                }

                marker = dataView.getUint8(offset + 1);
                if (debug) console.log(marker);

                // we could implement handling for other markers here,
                // but we're only looking for 0xFFE1 for EXIF data

                if (marker == 225) {
                    if (debug) console.log("Found 0xFFE1 marker");

                    return readEXIFData(dataView, offset + 4, dataView.getUint16(offset + 2) - 2);

                    // offset += 2 + file.getShortAt(offset+2, true);

                } else {
                    offset += 2 + dataView.getUint16(offset + 2);
                }
            }
        }

        function findIPTCinJPEG(file) {
            var dataView = new DataView(file);

            if (debug) console.log("Got file of length " + file.byteLength);
            if ((dataView.getUint8(0) != 0xFF) || (dataView.getUint8(1) != 0xD8)) {
                if (debug) console.log("Not a valid JPEG");
                return false; // not a valid jpeg
            }

            var offset = 2,
                length = file.byteLength;


            var isFieldSegmentStart = function(dataView, offset) {
                return (
                    dataView.getUint8(offset) === 0x38 &&
                    dataView.getUint8(offset + 1) === 0x42 &&
                    dataView.getUint8(offset + 2) === 0x49 &&
                    dataView.getUint8(offset + 3) === 0x4D &&
                    dataView.getUint8(offset + 4) === 0x04 &&
                    dataView.getUint8(offset + 5) === 0x04
                );
            };

            while (offset < length) {
                if (isFieldSegmentStart(dataView, offset)) {

                    // Get the length of the name header (which is padded to an even number of bytes)
                    var nameHeaderLength = dataView.getUint8(offset + 7);
                    if (nameHeaderLength % 2 !== 0) nameHeaderLength += 1;
                    // Check for pre photoshop 6 format
                    if (nameHeaderLength === 0) {
                        // Always 4
                        nameHeaderLength = 4;
                    }

                    var startOffset = offset + 8 + nameHeaderLength;
                    var sectionLength = dataView.getUint16(offset + 6 + nameHeaderLength);

                    return readIPTCData(file, startOffset, sectionLength);

                    break;
                }

                // Not the marker, continue searching
                offset++;
            }
        }

        var IptcFieldMap = {
            0x78: 'caption',
            0x6E: 'credit',
            0x19: 'keywords',
            0x37: 'dateCreated',
            0x50: 'byline',
            0x55: 'bylineTitle',
            0x7A: 'captionWriter',
            0x69: 'headline',
            0x74: 'copyright',
            0x0F: 'category'
        };

        function readIPTCData(file, startOffset, sectionLength) {
            var dataView = new DataView(file);
            var data = {};
            var fieldValue, fieldName, dataSize, segmentType, segmentSize;
            var segmentStartPos = startOffset;
            while (segmentStartPos < startOffset + sectionLength) {
                if (dataView.getUint8(segmentStartPos) === 0x1C && dataView.getUint8(segmentStartPos + 1) === 0x02) {
                    segmentType = dataView.getUint8(segmentStartPos + 2);
                    if (segmentType in IptcFieldMap) {
                        dataSize = dataView.getInt16(segmentStartPos + 3);
                        segmentSize = dataSize + 5;
                        fieldName = IptcFieldMap[segmentType];
                        fieldValue = getStringFromDB(dataView, segmentStartPos + 5, dataSize);
                        // Check if we already stored a value with this name
                        if (data.hasOwnProperty(fieldName)) {
                            // Value already stored with this name, create multivalue field
                            if (data[fieldName] instanceof Array) {
                                data[fieldName].push(fieldValue);
                            } else {
                                data[fieldName] = [data[fieldName], fieldValue];
                            }
                        } else {
                            data[fieldName] = fieldValue;
                        }
                    }

                }
                segmentStartPos++;
            }
            return data;
        }

        function readTags(file, tiffStart, dirStart, strings, bigEnd) {
            var entries = file.getUint16(dirStart, !bigEnd),
                tags = {},
                entryOffset, tag,
                i;

            for (i = 0; i < entries; i++) {
                entryOffset = dirStart + i * 12 + 2;
                tag = strings[file.getUint16(entryOffset, !bigEnd)];
                if (!tag && debug) console.log("Unknown tag: " + file.getUint16(entryOffset, !bigEnd));
                tags[tag] = readTagValue(file, entryOffset, tiffStart, dirStart, bigEnd);
            }
            return tags;
        }


        function readTagValue(file, entryOffset, tiffStart, dirStart, bigEnd) {
            var type = file.getUint16(entryOffset + 2, !bigEnd),
                numValues = file.getUint32(entryOffset + 4, !bigEnd),
                valueOffset = file.getUint32(entryOffset + 8, !bigEnd) + tiffStart,
                offset,
                vals, val, n,
                numerator, denominator;

            switch (type) {
                case 1: // byte, 8-bit unsigned int
                case 7: // undefined, 8-bit byte, value depending on field
                    if (numValues == 1) {
                        return file.getUint8(entryOffset + 8, !bigEnd);
                    } else {
                        offset = numValues > 4 ? valueOffset : (entryOffset + 8);
                        vals = [];
                        for (n = 0; n < numValues; n++) {
                            vals[n] = file.getUint8(offset + n);
                        }
                        return vals;
                    }
                case 2: // ascii, 8-bit byte
                    offset = numValues > 4 ? valueOffset : (entryOffset + 8);
                    return getStringFromDB(file, offset, numValues - 1);
                case 3: // short, 16 bit int
                    if (numValues == 1) {
                        return file.getUint16(entryOffset + 8, !bigEnd);
                    } else {
                        offset = numValues > 2 ? valueOffset : (entryOffset + 8);
                        vals = [];
                        for (n = 0; n < numValues; n++) {
                            vals[n] = file.getUint16(offset + 2 * n, !bigEnd);
                        }
                        return vals;
                    }
                case 4: // long, 32 bit int
                    if (numValues == 1) {
                        return file.getUint32(entryOffset + 8, !bigEnd);
                    } else {
                        vals = [];
                        for (n = 0; n < numValues; n++) {
                            vals[n] = file.getUint32(valueOffset + 4 * n, !bigEnd);
                        }
                        return vals;
                    }
                case 5: // rational = two long values, first is numerator, second is denominator
                    if (numValues == 1) {
                        numerator = file.getUint32(valueOffset, !bigEnd);
                        denominator = file.getUint32(valueOffset + 4, !bigEnd);
                        val = new Number(numerator / denominator);
                        val.numerator = numerator;
                        val.denominator = denominator;
                        return val;
                    } else {
                        vals = [];
                        for (n = 0; n < numValues; n++) {
                            numerator = file.getUint32(valueOffset + 8 * n, !bigEnd);
                            denominator = file.getUint32(valueOffset + 4 + 8 * n, !bigEnd);
                            vals[n] = new Number(numerator / denominator);
                            vals[n].numerator = numerator;
                            vals[n].denominator = denominator;
                        }
                        return vals;
                    }
                case 9: // slong, 32 bit signed int
                    if (numValues == 1) {
                        return file.getInt32(entryOffset + 8, !bigEnd);
                    } else {
                        vals = [];
                        for (n = 0; n < numValues; n++) {
                            vals[n] = file.getInt32(valueOffset + 4 * n, !bigEnd);
                        }
                        return vals;
                    }
                case 10: // signed rational, two slongs, first is numerator, second is denominator
                    if (numValues == 1) {
                        return file.getInt32(valueOffset, !bigEnd) / file.getInt32(valueOffset + 4, !bigEnd);
                    } else {
                        vals = [];
                        for (n = 0; n < numValues; n++) {
                            vals[n] = file.getInt32(valueOffset + 8 * n, !bigEnd) / file.getInt32(valueOffset + 4 + 8 * n, !bigEnd);
                        }
                        return vals;
                    }
            }
        }

        function getStringFromDB(buffer, start, length) {
            var outstr = "";
            for (n = start; n < start + length; n++) {
                outstr += String.fromCharCode(buffer.getUint8(n));
            }
            return outstr;
        }

        function readEXIFData(file, start) {
            if (getStringFromDB(file, start, 4) != "Exif") {
                if (debug) console.log("Not valid EXIF data! " + getStringFromDB(file, start, 4));
                return false;
            }

            var bigEnd,
                tags, tag,
                exifData, gpsData,
                tiffOffset = start + 6;

            // test for TIFF validity and endianness
            if (file.getUint16(tiffOffset) == 0x4949) {
                bigEnd = false;
            } else if (file.getUint16(tiffOffset) == 0x4D4D) {
                bigEnd = true;
            } else {
                if (debug) console.log("Not valid TIFF data! (no 0x4949 or 0x4D4D)");
                return false;
            }

            if (file.getUint16(tiffOffset + 2, !bigEnd) != 0x002A) {
                if (debug) console.log("Not valid TIFF data! (no 0x002A)");
                return false;
            }

            var firstIFDOffset = file.getUint32(tiffOffset + 4, !bigEnd);

            if (firstIFDOffset < 0x00000008) {
                if (debug) console.log("Not valid TIFF data! (First offset less than 8)", file.getUint32(tiffOffset + 4, !bigEnd));
                return false;
            }

            tags = readTags(file, tiffOffset, tiffOffset + firstIFDOffset, TiffTags, bigEnd);

            if (tags.ExifIFDPointer) {
                exifData = readTags(file, tiffOffset, tiffOffset + tags.ExifIFDPointer, ExifTags, bigEnd);
                for (tag in exifData) {
                    switch (tag) {
                        case "LightSource":
                        case "Flash":
                        case "MeteringMode":
                        case "ExposureProgram":
                        case "SensingMethod":
                        case "SceneCaptureType":
                        case "SceneType":
                        case "CustomRendered":
                        case "WhiteBalance":
                        case "GainControl":
                        case "Contrast":
                        case "Saturation":
                        case "Sharpness":
                        case "SubjectDistanceRange":
                        case "FileSource":
                            exifData[tag] = StringValues[tag][exifData[tag]];
                            break;

                        case "ExifVersion":
                        case "FlashpixVersion":
                            exifData[tag] = String.fromCharCode(exifData[tag][0], exifData[tag][1], exifData[tag][2], exifData[tag][3]);
                            break;

                        case "ComponentsConfiguration":
                            exifData[tag] =
                                StringValues.Components[exifData[tag][0]] +
                                StringValues.Components[exifData[tag][1]] +
                                StringValues.Components[exifData[tag][2]] +
                                StringValues.Components[exifData[tag][3]];
                            break;
                    }
                    tags[tag] = exifData[tag];
                }
            }

            if (tags.GPSInfoIFDPointer) {
                gpsData = readTags(file, tiffOffset, tiffOffset + tags.GPSInfoIFDPointer, GPSTags, bigEnd);
                for (tag in gpsData) {
                    switch (tag) {
                        case "GPSVersionID":
                            gpsData[tag] = gpsData[tag][0] +
                                "." + gpsData[tag][1] +
                                "." + gpsData[tag][2] +
                                "." + gpsData[tag][3];
                            break;
                    }
                    tags[tag] = gpsData[tag];
                }
            }

            return tags;
        }

        function getData(img, callback) {
            if ((img instanceof Image || img instanceof HTMLImageElement) && !img.complete) return false;

            if (!imageHasData(img)) {
                getImageData(img, callback);
            } else {
                if (callback) {
                    callback.call(img);
                }
            }
            return true;
        }

        function getTag(img, tag) {
            if (!imageHasData(img)) return;
            return img.exifdata[tag];
        }

        function getAllTags(img) {
            if (!imageHasData(img)) return {};
            var a,
                data = img.exifdata,
                tags = {};
            for (a in data) {
                if (data.hasOwnProperty(a)) {
                    tags[a] = data[a];
                }
            }
            return tags;
        }

        function pretty(img) {
            if (!imageHasData(img)) return "";
            var a,
                data = img.exifdata,
                strPretty = "";
            for (a in data) {
                if (data.hasOwnProperty(a)) {
                    if (typeof data[a] == "object") {
                        if (data[a] instanceof Number) {
                            strPretty += a + " : " + data[a] + " [" + data[a].numerator + "/" + data[a].denominator + "]\r\n";
                        } else {
                            strPretty += a + " : [" + data[a].length + " values]\r\n";
                        }
                    } else {
                        strPretty += a + " : " + data[a] + "\r\n";
                    }
                }
            }
            return strPretty;
        }

        function readFromBinaryFile(file) {
            return findEXIFinJPEG(file);
        }

        return {
            readFromBinaryFile: readFromBinaryFile,
            pretty: pretty,
            getTag: getTag,
            getAllTags: getAllTags,
            getData: getData,
            Tags: ExifTags,
            TiffTags: TiffTags,
            GPSTags: GPSTags,
            StringValues: StringValues
        };
    }

    var __EXIF = getexif();

    //---修正ios压扁问题。
    //--修正ios下面canvas图片压缩的情况。
    /**
     * Detecting vertical squash in loaded image.
     * Fixes a bug which squash image vertically while drawing into canvas for some images.
     * This is a bug in iOS6 devices. This function from https://github.com/stomita/ios-imagefile-megapixel
     *
     */
    function detectVerticalSquash(img) {
        var iw = img.naturalWidth,
            ih = img.naturalHeight;
        var canvas = document.createElement('canvas');
        canvas.width = 1;
        canvas.height = ih;
        var ctx = canvas.getContext('2d');
        ctx.drawImage(img, 0, 0);
        var data = ctx.getImageData(0, 0, 1, ih).data;
        // search image edge pixel position in case it is squashed vertically.
        var sy = 0;
        var ey = ih;
        var py = ih;
        while (py > sy) {
            var alpha = data[(py - 1) * 4 + 3];
            if (alpha === 0) {
                ey = py;
            } else {
                sy = py;
            }
            py = (ey + sy) >> 1;
        }
        var ratio = (py / ih);
        return (ratio === 0) ? 1 : ratio;
    }

    /**
     * A replacement for context.drawImage
     * (args are for source and destination).
     */
    function drawImageIOSFix(ctx, img, sx, sy, sw, sh, dx, dy, dw, dh) {
        var vertSquashRatio = detectVerticalSquash(img);
        // Works only if whole image is displayed:
        // ctx.drawImage(img, sx, sy, sw, sh, dx, dy, dw, dh / vertSquashRatio);
        // The following works correct also when only a part of the image is displayed:
        ctx.drawImage(img, sx * vertSquashRatio, sy * vertSquashRatio,
            sw * vertSquashRatio, sh * vertSquashRatio,
            dx, dy, dw, dh);
    }


    //--变量及常用状态，方法。
    var Panel_loading = $("#panel_loading");
    var Panel_view_result = $("#panel_view_result");
    var Panel_edit = $("#panel_edit");
    var BtnSave = $("#btn_save");
    var imgPreview = document.getElementById("img_preview");
    var jel_tips = $("#tips");
    var tmpCanvas = document.getElementById("tmp_canvas");
    var tmpContext = tmpCanvas.getContext("2d");
    var canvas = document.getElementById('canvas');
    var context = canvas.getContext('2d');
    var originImg = document.getElementById("originImg"); //原始图片
    var oFReader = new FileReader(),
        rFilter = /^(?:image\/bmp|image\/cis\-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x\-cmu\-raster|image\/x\-cmx|image\/x\-icon|image\/x\-portable\-anymap|image\/x\-portable\-bitmap|image\/x\-portable\-graymap|image\/x\-portable\-pixmap|image\/x\-rgb|image\/x\-xbitmap|image\/x\-xpixmap|image\/x\-xwindowdump)$/i;
    var imgcrop;
    var pbar = null;
    var cutter_canvas = document.getElementById("canvas_cutter");
    var el_cutterContainer = $("#cutterContainer");


    //--四个，loading，result，file，edit
    function changePanel(panelName) {
        Panel_edit.addClass("hide");
        Panel_loading.addClass("hide");
        Panel_view_result.addClass("hide");

        if (panelName == "loading") {
            Panel_loading.removeClass("hide");
            BtnSave.css("display", "none");
            return;
        }
        if (panelName == "result") {
            Panel_view_result.removeClass("hide");
            BtnSave.css("display", "none");
            return;
        }

        if (panelName == "edit") {
            Panel_edit.removeClass("hide");
            BtnSave.css("display", "");
            return;
        }
    }

    changePanel("result");

    //变量
    var Options = {
        width: 250,
        height: 250,
        cutWidth: 150,
        cutHeight: 200,
        cutMinSize: 50, //裁剪框最小尺寸，即最小可以缩放到这个size，width及height任意一个都无法小于这个值。
        //--系统自带，运行时自动运算，请不要修改。
        cropViewWidth: 0, //在画布里面显示的最大宽度
        cropViewHeight: 0, //在画布里面显示的最大高度
        cropLeft: 0,
        cropTop: 0,
        //--裁剪框
        cutViewWidth: 0, //当前宽度，
        cutViewHeight: 0, //当前高度
        cutMaxWidth: 0, //裁剪框最大宽度。
        cutMaxHeight: 0, //裁剪框最大高度。
        //--四象限。用于判断距离。
        cutBoxLimitX1: 0,
        cutBoxLimitX2: 0,
        cutBoxLimitY1: 0,
        cutBoxLimitY2: 0,
        cutLeft: 0, //裁剪框绝对定位，左侧距离。
        cutTop: 0, //裁剪框绝对定位，离顶部距离。
        initStatus: false, //当前组件是否已经初始化了。
        Orientation: 1, //当前图片的颠倒状态，通过exif读取。1表示正常，3表示上下颠倒，8表示要顺时针旋转90度。6表示逆时针旋转90度。
        transX: 0, //需要按照该起始点进行旋转
        transY: 0,
        XDimension: 0,
        YDimension: 0,
        //--上传类型，默认值：1
        //  1 - 简历相片
        //  2 - 账号头像
        uploadType: 1
    };
    var Options_image = {
        width: 0,
        height: 0,
        scaleWidth: 0, //图片缩放后大小
        scaleHeight: 0, //图片缩放后大小
        imgData: ""
    };
    //--添加缩放功能。
    var Options_zoom = {
        beginX1: 0,
        beginY1: 0,
        beginX2: 0,
        beginY2: 0,
        endX1: 0,
        endY1: 0,
        endX2: 0,
        endY2: 0
    };
    //--添加裁剪框移动功能
    var Options_move = {
        isInCutter: false,
        beginX1: 0,
        beginY1: 0,
        endX1: 0,
        endY1: 0
    };
    var Options_process = {
        beginX: 0, //触摸时候起始点
        beginY: 0, //触摸时候起始点
        endX: 0, //触摸时候终点
        endY: 0, //触摸时候终点
        barWidth: 200, //进度条长度
        pointX: 0, //当前指示点位置
        pointY: 0,
        percent: 50, //百分比值。
        maxPercent: 100, //最大百分比
        defaultPercent: 50, //初始化百分比
        minPercent: 20, //最小百分比
        initStatus: false
    };

    //--进行屏幕尺寸计算，并且选取合适的裁剪区域宽度及高度。
    function setSuitableScreen() {
        //--计算当前屏幕的宽度及高度。
        var _width = $(window).width();
        var _height = $(window).height();

        // jel_tips.text("屏幕的宽度及高度："+_width+" px "+_height+" px");

        var _s_height = _height - 120 - 40 - 100;
        var _s_width = _width - 10;

        var _sutableSize = 250;
        _sutableSize = Math.min(_s_width, _s_height);
        if (_sutableSize < 300) {
            _sutableSize = 300;
        }
        Options.width = _sutableSize;
        Options.height = _sutableSize;
        tmpCanvas.width = _sutableSize;
        tmpCanvas.height = _sutableSize;
        canvas.width = _sutableSize;
        canvas.height = _sutableSize;
        cutter_canvas.width = _sutableSize;
        cutter_canvas.height = _sutableSize;
        el_cutterContainer.css({
            "width": _sutableSize + "px",
            "height": _sutableSize + "px"
        });
        el_cutterContainer.parent("div.component_box").css({
            "width": _sutableSize + "px",
            "height": _sutableSize + "px"
        });
    }

    setSuitableScreen();


    //--逻辑方法定义
    $("#uploadImage").change(function() {
        changePanel("loading");
        if (document.getElementById("uploadImage").files.length === 0) {
            return;
        }
        var oFile = document.getElementById("uploadImage").files[0];
        //if (!rFilter.test(oFile.type)) { alert("You must select a valid image file!"); return; }

        /*  if(oFile.size>5*1024*1024){
         message(myCache.par.lang,{cn:"照片上传：文件不能超过5MB!请使用容量更小的照片。",en:"证书上传：文件不能超过100K!"})
         changePanel("result");
         return;
         }*/
        if (!new RegExp("(jpg|jpeg|gif|png)+", "gi").test(oFile.type)) {
            message(myCache.par.lang, {
                cn: "照片上传：文件类型必须是JPG、JPEG、PNG或GIF!",
                en: "照片上传：文件类型必须是JPG、JPEG、PNG或GIF!"
            })
            changePanel("result");
            return;
        }
        oFReader.readAsDataURL(oFile);
    });
    $("#btn_save").click(function() {
        if (!Options.initStatus) {
            alert("请选择图片！");
            return;
        }
        var imgData = imgcrop.getCropImgData();
        //--直接在本地预览，不经过服务端

        document.getElementById("img_preview").src = imgData;
        changePanel("result");
        imgcrop.disposeEvents();
        pbar.disposeEvents();
        // $("#uploadImage").css("display","none");
        // imgPreview.onclick=function(){
        //     location.reload();
        // }

        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function(e) {
            if (xhr.readyState == 4) {
                if (xhr.status == 200) {
                    //--获取返回的数据。
                    var _res = xhr.responseText;
                    _res = $.trim(_res);
                    var json = util.toJSON(_res);
                    if (json.status == "1") {
                        // 上传简历相片成功后的操作
                        if (Options.uploadType === 1) {
                            //--因为程序本身已经将相关信息保存到sessionStorage（本地），所以必须更新本地信息。
                            if (window["sessionStorage"] == undefined) {
                                return;
                            }

                            var rid = sessionStorage["resumeId"];
                            var cn_rid = sessionStorage["cnResumeId"];
                            //var en_rid = sessionStorage["enResumeId"];

                            if (cn_rid) {
                                var skey = "r" + rid + "s" + cn_rid;
                                //var strjson=sessionStorage[skey];
                                if (sessionStorage[skey] != undefined) {
                                    var rJSON = util.toJSON(sessionStorage[skey]);
                                    rJSON["base"]["perPhotoPath"] = json["path"];
                                    rJSON["base"]["photo"] = json["path"]+json["name"];
									console.log(rJSON);
                                    sessionStorage[skey] = util.toString(rJSON);
                                }
                            }
                            /*if (en_rid) {
                                var skey = "r" + rid + "s" + en_rid;
                                //var strjson=sessionStorage[skey];
                                if (sessionStorage[skey] != undefined) {
                                    var rJSON = util.toJSON(sessionStorage[skey]);
                                    rJSON["base"]["perPhotoPath"] = json["perPhotoPath"];
                                    rJSON["base"]["photo"] = json["photo"];
                                    sessionStorage[skey] = util.toString(rJSON);
                                }
                            }*/
                        }

                        // 上传个人头像成功后的操作
                        if (Options.uploadType === 2) {
                            return true;

                        }
                    } else {
                        alert("服务端无法保存资料！");
                    }

                    //document.getElementById("status").innerHTML = "<font color='#f00'>上传成功！</font>";
                } else {
                    alert("服务端无法响应，错误编号：" + xhr.status);
                }
            }
        };

        xhr.open("POST", "/api/web/miUploadPhoto.api", true);
        var data = new FormData();
        //data.append("size", 180);
        data.append("file", imgData);
        // 上传类型，默认值：1
        // 1 - 简历相片
        // 2 - 个人头像
        data.append("flag", Options.uploadType);
		//data.append("act", "mobilePhone");
        xhr.send(data);
    });

    oFReader.onload = function(oFREvent) {
        //document.getElementById("uploadPreview").src = oFREvent.target.result;
        var image = new Image();
        image.src = oFREvent.target.result;
        originImg.src = oFREvent.target.result;

        function _loadingOriginImg() {
            try {
                //--修正ios6 7 颠倒，压扁问题。
                __EXIF.getData(this, function() {
                    var make = __EXIF.getTag(this, "Make");
                    Options.Orientation = __EXIF.getTag(this, "Orientation");

                    if (Options.Orientation == undefined) {
                        Options.Orientation = 1;
                    }

                    var _realWidth = 0;
                    var _realHeight = 0;
                    //--计算是否需要旋转。
                    if (Options.Orientation != 1) {
                        Options.transX = parseInt(Options.width / 2);
                        Options.transY = parseInt(Options.height / 2);

                    } else {
                        Options.transX = 0;
                        Options.transY = 0;
                        _realWidth = image.width;
                        _realHeight = image.height;
                    }
                    canvas.width = Options.width;
                    canvas.height = Options.height;
                    var XDimension = __EXIF.getTag(this, "PixelXDimension");
                    var YDimension = __EXIF.getTag(this, "PixelYDimension");
                    Options.XDimension = XDimension;
                    Options.YDimension = YDimension;
                    caculateOptions(image.width, image.height);
                    //--放入临时画布。
                    tmpContext.clearRect(0, 0, tmpCanvas.width, tmpCanvas.height);
                    //context.clearRect(0,0,canvas.width,canvas.height);
                    //context.drawImage(image, 0, 0, image.width, image.height, Options.cropLeft, Options.cropTop, Options_image.scaleWidth, Options_image.scaleHeight);
                    // context.drawImage(image, 0, 0, image.width, image.height, Options.cropLeft, Options.cropTop, canvas.width, canvas.height);
                    drawImageIOSFix(tmpContext, image, 0, 0, image.width, image.height, Options.cropLeft, Options.cropTop, Options_image.scaleWidth, Options_image.scaleHeight);
                    context.clearRect(0, 0, canvas.width, canvas.height);
                    //生成一个可以用的缩略图。


                    switch (Options.Orientation) {
                        case 8:
                            // 90 rotate left     --需要90度向左旋转。。那么，这个 PixelYDimension就是宽度了，PixelXDimension就是高度了。
                            context.translate(Options.transX, Options.transY);
                            context.rotate(-0.5 * Math.PI);
                            _realWidth = YDimension;
                            _realHeight = XDimension;
                            break;
                        case 3:
                            //180向左旋转
                            context.translate(Options.transX, Options.transY);
                            context.rotate(Math.PI);
                            _realWidth = XDimension;
                            _realHeight = YDimension;
                            break;
                        case 6:
                            //90 rotate right 需要向右旋转90度，PixelYDimension就是宽度了，PixelXDimension就是高度了。
                            _realWidth = YDimension;
                            _realHeight = XDimension;

                            context.translate(Options.transX, Options.transY);
                            context.rotate(0.5 * Math.PI);
                            break;
                        case 1:

                            break;
                    }
                    caculateOptions(_realWidth, _realHeight);
                    context.drawImage(tmpCanvas, 0, 0, tmpCanvas.width, tmpCanvas.height, 0 - Options.transX, 0 - Options.transY, tmpCanvas.width, tmpCanvas.height);
                    imgcrop = new TouchImgCropper("canvas", "canvas_cutter", 16, 9, originImg);
                    imgcrop.inition();


                    //selection = new Selection("canvas",16,9);
                    // selection.drawScene();
                    //selection.addListerner();
                    pbar = new ProcessBar();
                    Options_process.percent = Options_process.defaultPercent;
                    pbar.inition(Options_process.defaultPercent);
                    pbar.resizeCutterByPercent();
                    Options.initStatus = true;
                    changePanel("edit");
                });
            } catch (p1) {
                alert(p1);
            }
        }
        image.onload = _loadingOriginImg;
        jel_tips.text("");
    };

    //--通过宽度及高度计算各种尺寸。
    function caculateOptions(_width, _height) {
        Options_image.width = _width;
        Options_image.height = _height;
        var scale = Math.max(Options_image.width / Options.width, Options_image.height / Options.height);
        if (scale > 1) {
            Options.cropViewWidth = parseInt(Math.floor(Options_image.width / scale));
            Options.cropViewHeight = parseInt(Math.floor(Options_image.height / scale));
        } else {
            Options.cropViewWidth = Options_image.width;
            Options.cropViewHeight = Options_image.height;
        }

        Options_image.scaleWidth = Options.cropViewWidth;
        Options_image.scaleHeight = Options.cropViewHeight;

        //--计算比例，将其放到canvas里面。

        Options.cropViewWidth = Options_image.scaleWidth;
        Options.cropViewHeight = Options_image.scaleHeight;
        //--计算画布里面的图像的位置。
        Options.cropLeft = parseInt((Options.width - Options.cropViewWidth) / 2);
        Options.cropTop = parseInt((Options.height - Options.cropViewHeight) / 2);

        //--计算裁剪框实际大小及实际位置。
        //计算裁剪框的位置。

        var scale_2 = Math.max(Options.cutWidth / Options.cropViewWidth, Options.cutHeight / Options.cropViewHeight);
        if (scale_2 > 1) {
            Options.cutViewWidth = parseInt(Math.floor(Options.cutWidth / scale_2));
            Options.cutViewHeight = parseInt(Math.floor(Options.cutHeight / scale_2));
        } else {
            //两个大于cutWidth及cutHeight，那么就按照相关步骤得出最大值。

            Options.cutViewHeight = parseInt(Options.cutHeight / scale_2);
            Options.cutViewWidth = parseInt(Options.cutWidth / scale_2);
        }
        Options.cutMaxWidth = Options.cutViewWidth;
        Options.cutMaxHeight = Options.cutViewHeight;

        Options.cutLeft = parseInt(Math.floor((Options.width - Options.cutViewWidth)) / 2);
        Options.cutTop = parseInt(Math.floor((Options.height - Options.cutViewHeight)) / 2);
        //-四象限。
        Options.cutBoxLimitX1 = parseInt((Options.width - Options_image.scaleWidth) / 2);
        Options.cutBoxLimitX2 = Options.cutBoxLimitX1 + Options_image.scaleWidth;
        Options.cutBoxLimitY1 = parseInt((Options.height - Options_image.scaleHeight) / 2);
        Options.cutBoxLimitY2 = Options.cutBoxLimitY1 + Options_image.scaleHeight;
    }

    var __that = null;

    function TouchImgCropper(canvas, canvas_cutter, blheight, blwidth, img) {
        __that = this;
        this.ImgSource = img;
        this.canvas = document.getElementById(canvas);
        this.context = this.canvas.getContext("2d");
        this.canvasCutter = document.getElementById(canvas_cutter);
        this.contextCutter = this.canvasCutter.getContext("2d");
        this.image = new Image();
        this.image.src = this.canvas.toDataURL();
    }
    TouchImgCropper.prototype.inition = function() {
        this.InitBGSecence();
        this.InitCutter();
        this.disposeEvents();
        this.addListeners();
    }
    TouchImgCropper.prototype.InitBGSecence = function() { // main drawScene function
        /*

         this.context.fillStyle = 'rgba(0, 0, 0, 0.3)';
         this.context.fillRect(0-Options.transX, 0-Options.transY, this.canvas.width, this.canvas.height);
         */

        this.context.fillStyle = 'rgba(0, 0, 0, 1)';
        if (Options.Orientation == 1 || Options.Orientation == 3) {
            this.context.fillRect(0 - Options.transX, 0 - Options.transY, Options.cropLeft, this.canvas.height);
            this.context.fillRect(Options.cutBoxLimitX2 - Options.transX, 0 - Options.transY, Options.cropLeft, this.canvas.height);

            this.context.fillRect(Options.cropLeft - Options.transX, 0 - Options.transY, Options.cropViewWidth, Options.cropTop);
            this.context.fillRect(Options.cropLeft - Options.transX, Options.cutBoxLimitY2 - Options.transY, Options.cropViewWidth, Options.cropTop);
        } else {
            this.context.fillRect(0 - Options.transX, 0 - Options.transY, this.canvas.height, Options.cropLeft);
            this.context.fillRect(0 - Options.transY, Options.cutBoxLimitX2 - Options.transX, this.canvas.height, Options.cropLeft);

            this.context.fillRect(Options.cropLeft - Options.transX, 0 - Options.transY, Options.cropViewWidth, Options.cropTop);
            this.context.fillRect(Options.cutBoxLimitY2 - Options.transY, Options.cropLeft - Options.transX, Options.cropTop, Options.cropViewWidth);
        }
        this.context.fillStyle = 'rgba(0, 0, 0, 0.5)';
        if (Options.Orientation == 1 || Options.Orientation == 3) {
            this.context.fillRect(Options.cropLeft - Options.transX, Options.cropTop - Options.transY, Options.cropViewWidth, Options.cropViewHeight);

        } else {
            this.context.fillRect(Options.cropTop - Options.transY, Options.cropLeft - Options.transX, Options.cropViewHeight, Options.cropViewWidth);
        }
        //this.context.fillRect(Options.cutBoxLimitX1-Options.transX, Options.cutBoxLimitY1-Options.transY, Options.cropViewWidth, Options.cutBoxLimitY1);

        //this.context.fillRect(0-Options.transX, 0-Options.transY, this.canvas.width, this.canvas.height);
    }
    TouchImgCropper.prototype.InitCutter = function() {
        this.resetCutter();
    }
    TouchImgCropper.prototype.resetCutter = function() {
        this.contextCutter.strokeStyle = '#fff';
        this.contextCutter.lineWidth = 0.5;
        //this.context.strokeRect(this.x, this.y, this.w, this.h);
        this.contextCutter.clearRect(0, 0, this.canvasCutter.width, this.canvasCutter.height);
        this.contextCutter.strokeRect(Options.cutLeft, Options.cutTop, Options.cutViewWidth, Options.cutViewHeight);
        // 绘制选区图像
        if (Options.cutViewWidth && Options.cutViewHeight) {
            //this.context.drawImage(this.image, this.x, this.y, this.w, this.h, this.x, this.y, this.w, this.h);
            this.contextCutter.drawImage(this.image, Options.cutLeft, Options.cutTop, Options.cutViewWidth, Options.cutViewHeight, Options.cutLeft, Options.cutTop, Options.cutViewWidth, Options.cutViewHeight);
        }
    }
    TouchImgCropper.prototype.touchstart = function(event) {
        /**
         * 判断是否在裁剪区框区域内，假如不是就退出，让他拉屏幕。
         * */
        Options_move = {
            isInCutter: false,
            beginX1: 0,
            beginY1: 0,
            endX1: 0,
            endY1: 0
        };
        var beginX = event.changedTouches[0].pageX;
        var beginY = event.changedTouches[0].pageY;
        Options_move.beginX1 = beginX;
        Options_move.beginY1 = beginY;
        var abs_info = __that.GetAbsoluteLocationEx(__that.canvasCutter);
        var abs_x = abs_info.absoluteLeft;
        var abs_y = abs_info.absoluteTop;
        //--新的四象限。
        var __x1 = abs_x + Options.cutLeft;
        var __y1 = abs_y + Options.cutTop;
        var __x2 = __x1 + Options.cutViewWidth;
        var __y2 = __y1 + Options.cutViewHeight;
        var isInCutter = (__x1 <= Options_move.beginX1 && Options_move.beginX1 <= __x2 && __y1 <= Options_move.beginY1 && Options_move.beginY1 <= __y2);
        if (isInCutter) {
            event.preventDefault();
            event.stopPropagation();
            Options_move.isInCutter = true;
        }
    }
    //计算相对于页面位置
    TouchImgCropper.prototype.GetAbsoluteLocationEx = function(element) {
        if (arguments.length != 1 || element == null) {
            return null;
        }
        var elmt = element;
        var offsetTop = elmt.offsetTop;
        var offsetLeft = elmt.offsetLeft;
        var offsetWidth = elmt.offsetWidth;
        var offsetHeight = elmt.offsetHeight;
        while (elmt = elmt.offsetParent) {
            // add this judge
            if (elmt.style.position == 'absolute' || elmt.style.position == 'relative' || (elmt.style.overflow != 'visible' && elmt.style.overflow != '')) {
                break;
            }
            offsetTop += elmt.offsetTop;
            offsetLeft += elmt.offsetLeft;
        }
        return {
            absoluteTop: offsetTop,
            absoluteLeft: offsetLeft,
            offsetWidth: offsetWidth,
            offsetHeight: offsetHeight
        };
    }
    TouchImgCropper.prototype.touchmove = function(event) {
        if (!Options_move.isInCutter) {
            return;
        }
        event.preventDefault();
        event.stopPropagation();
        var beginX = event.changedTouches[0].pageX;
        var beginY = event.changedTouches[0].pageY;
        Options_move.endX1 = beginX;
        Options_move.endY1 = beginY;
        //--计算是否发生位移，根据位移来定位裁剪框位置。
        //位移量。
        var _d_x = Options_move.endX1 - Options_move.beginX1;
        var _d_y = Options_move.endY1 - Options_move.beginY1;
        //--当前裁剪框原始位置。
        var _new_x = Options.cutLeft;
        var _new_y = Options.cutTop;
        _new_x += _d_x;
        _new_y += _d_y;
        //--判断是否在矩形边框，假如超出去，那么就取最终点。
        //--注意，判断相关点的范围。

        if (_new_x < Options.cutBoxLimitX1) {
            _new_x = Options.cutBoxLimitX1;
        } else if (_new_x > Options.cutBoxLimitX2) {
            _new_x = Options.cutBoxLimitX2;
        }
        //--顺便判断，加上宽度后，是否超过了范围。
        if ((_new_x + Options.cutViewWidth) > Options.cutBoxLimitX2) {
            _new_x = Options.cutBoxLimitX2 - Options.cutViewWidth;
        }
        if (_new_y < Options.cutBoxLimitY1) {
            _new_y = Options.cutBoxLimitY1;
        } else if (_new_y > Options.cutBoxLimitY2) {
            _new_y = Options.cutBoxLimitY2;
        }
        //--顺便判断，加上裁剪框高度后，是否超过下限。
        if ((_new_y + Options.cutViewHeight) > Options.cutBoxLimitY2) {
            _new_y = Options.cutBoxLimitY2 - Options.cutViewHeight;
        }

        Options.cutLeft = _new_x;
        Options.cutTop = _new_y;
        __that.resetCutter();
        //---将这一点的放回前一点。
        Options_move.beginX1 = Options_move.endX1;
        Options_move.beginY1 = Options_move.endY1;
    };
    TouchImgCropper.prototype.touchend = function(event) {
        event.preventDefault();
        event.stopPropagation();
    };
    TouchImgCropper.prototype.addListeners = function() {
        this.canvasCutter.addEventListener("touchstart", this.touchstart, false);
        this.canvasCutter.addEventListener("touchmove", this.touchmove, false);
        this.canvasCutter.addEventListener("touchend", this.touchend, false);
    }
    TouchImgCropper.prototype.disposeEvents = function() {
        this.canvasCutter.removeEventListener("touchstart", this.touchstart);
        this.canvasCutter.removeEventListener("touchmove", this.touchmove);
        this.canvasCutter.removeEventListener("touchend", this.touchend);
    }
    TouchImgCropper.prototype.getCropImgData = function() {
        var output = document.createElement("canvas");

        //--两种尺寸的图片，假如图片长宽大于正方形的尺寸，那么用第二种，否则直接获取图片。
        var scale__1 = Math.max(Options_image.width / Options_image.scaleWidth, Options_image.height / Options_image.scaleHeight);
        output.width = Options.cutWidth;
        output.height = Options.cutHeight;
        if (scale__1 <= 1) {
            output.getContext("2d").drawImage(__that.image, Options.cutLeft, Options.cutTop, Options.cutViewWidth, Options.cutViewHeight, 0, 0, output.width, output.height);
            return output.toDataURL("image/jpeg");
        }
        //--坐标换算。
        var __d_x = Options.cutLeft - Options.cutBoxLimitX1;
        var __d_y = Options.cutTop - Options.cutBoxLimitY1;
        var scale_x = Options_image.width / Options.cropViewWidth;
        var scale_y = Options_image.height / Options.cropViewHeight;
        var _o_x = parseInt((scale_x) * __d_x);
        var _o_y = parseInt((scale_y) * __d_y);
        //--长度换算
        var _o_width = parseInt(scale_x * Options.cutViewWidth);
        var _o_height = parseInt(scale_y * Options.cutViewHeight);

        var context = output.getContext("2d"); //.drawImage(__that.ImgSource, _o_x,_o_y, _o_width, _o_height, 0, 0, output.width, output.height);
        var output2 = document.createElement("canvas");
        var context2 = output2.getContext("2d");

        //--需要根据当前的裁剪框逆推原始图片的位置。
        var oImgInfo = {
            x: 0,
            y: 0,
            w: 0,
            h: 0,
            thumW: 0,
            thumH: 0,
            transX: 0,
            transY: 0
        };
        switch (Options.Orientation) {
            case 8:
                // 90 rotate left     --需要90度向左旋转。。那么，这个 PixelYDimension就是宽度了，PixelXDimension就是高度了。
                oImgInfo.h = _o_width;
                oImgInfo.w = _o_height;
                var _3_x = _o_x;
                var _3_y = _o_y + _o_height;
                oImgInfo.x = Options_image.height - _3_y;
                oImgInfo.y = _o_x;
                //oImgInfo.y-=oImgInfo.h;
                oImgInfo.thumH = Options.cutWidth;
                oImgInfo.thumW = Options.cutHeight;
                oImgInfo.transX = parseInt(Options.cutHeight / 2);
                oImgInfo.transY = parseInt(Options.cutWidth / 2);
                output.width = oImgInfo.thumW;
                output.height = oImgInfo.thumH;
                drawImageIOSFix(context, __that.ImgSource, oImgInfo.x, oImgInfo.y, oImgInfo.w, oImgInfo.h, 0, 0, output.width, output.height);
                drawToFinal(output, output2, context2, output.width, output.height, 8);
                return output2.toDataURL("image/jpeg");
                break;
                break;
            case 3:
                //180向左旋转
                oImgInfo.w = _o_width;
                oImgInfo.h = _o_height;
                var _3_x = _o_x + _o_width;
                var _3_y = _o_y + _o_height;
                _3_x = Options_image.width - _3_x;
                _3_y = Options_image.height - _3_y;
                oImgInfo.y = _3_y;
                oImgInfo.x = _3_x;
                //oImgInfo.y-=oImgInfo.h;
                oImgInfo.thumH = Options.cutHeight
                oImgInfo.thumW = Options.cutWidth;
                oImgInfo.transX = parseInt(Options.cutWidth / 2);
                oImgInfo.transY = parseInt(Options.cutHeight / 2);
                output.width = oImgInfo.thumW;
                output.height = oImgInfo.thumH;
                drawImageIOSFix(context, __that.ImgSource, oImgInfo.x, oImgInfo.y, oImgInfo.w, oImgInfo.h, 0, 0, output.width, output.height);
                drawToFinal(output, output2, context2, output.width, output.height, 3);
                return output2.toDataURL("image/jpeg");
                break;
            case 6:
                //90 rotate right 需要向右旋转90度，PixelYDimension就是宽度了，PixelXDimension就是高度了。
                oImgInfo.h = _o_width;
                oImgInfo.w = _o_height;
                oImgInfo.x = _o_y;
                oImgInfo.y = Options_image.width - _o_x - _o_width;
                //oImgInfo.y-=oImgInfo.h;
                oImgInfo.thumH = Options.cutWidth;
                oImgInfo.thumW = Options.cutHeight;
                oImgInfo.transX = parseInt(Options.cutHeight / 2);
                oImgInfo.transY = parseInt(Options.cutWidth / 2);
                output.width = oImgInfo.thumW;
                output.height = oImgInfo.thumH;
                drawImageIOSFix(context, __that.ImgSource, oImgInfo.x, oImgInfo.y, oImgInfo.w, oImgInfo.h, 0, 0, output.width, output.height);
                drawToFinal(output, output2, context2, output.width, output.height, 6);
                return output2.toDataURL("image/jpeg");
                break;
            case 1:
                //正常状态。
                oImgInfo.w = _o_width;
                oImgInfo.h = _o_height;
                oImgInfo.y = _o_y;
                oImgInfo.x = _o_x;
                //oImgInfo.y-=oImgInfo.h;
                oImgInfo.thumH = Options.cutHeight
                oImgInfo.thumW = Options.cutWidth;
                oImgInfo.transX = parseInt(Options.cutWidth / 2);
                oImgInfo.transY = parseInt(Options.cutHeight / 2);
                output.width = oImgInfo.thumW;
                output.height = oImgInfo.thumH;
                drawImageIOSFix(context, __that.ImgSource, oImgInfo.x, oImgInfo.y, oImgInfo.w, oImgInfo.h, 0, 0, output.width, output.height);
                return output.toDataURL("image/jpeg");
                break;
        }
    }

    var __thatBar = null;
    var ProcessBar = function() {
        __thatBar = this;

        this.jel_bar = $("#processBar");
        this.jel_barPoint = this.jel_bar.find(".circular");
        this.jel_barLine = this.jel_bar.find(".line");
        Options_process.width = this.jel_barLine.width();
    }
    ProcessBar.prototype.inition = function(initPercent) {
        Options_process.percent = parseInt(initPercent);
        this.resetPercent();
        this.addEvents();
    }
    ProcessBar.prototype.addEvents = function() {
        this.jel_bar[0].addEventListener("touchstart", this.touchstart, false);
        this.jel_bar[0].addEventListener("touchmove", this.touchmove, false);
    }
    ProcessBar.prototype.disposeEvents = function() {
        this.jel_bar[0].removeEventListener("touchstart", this.touchstart);
        this.jel_bar[0].removeEventListener("touchmove", this.touchmove);
    }
    ProcessBar.prototype.setPercent = function(percent) {
        var str_percent = parseInt(percent) + "" + "%";
        this.jel_barPoint.css("left", str_percent);
        this.jel_barLine.css("width", str_percent)
    }
    ProcessBar.prototype.resetPercent = function() {
        //--因为有最大及最小限制，所以现在的百分比要做一下转换。
        var _origin_percent = parseInt(Options_process.percent);
        var _show_percent = 0;
        if (_origin_percent == Options_process.minPercent) {
            _show_percent = 0;
        } else if (_origin_percent == Options_process.maxPercent) {
            _show_percent = 100;
        } else {
            _show_percent = parseInt(((_origin_percent - Options_process.minPercent) / (Options_process.maxPercent - Options_process.minPercent)) * 100);
        }
        var str_percent = _show_percent + "" + "%";
        this.jel_barPoint.css("left", str_percent);
        this.jel_barLine.css("width", str_percent)
    }
    ProcessBar.prototype.touchstart = function(event) {
        event.stopPropagation();
        event.preventDefault();
        var beginX = event.changedTouches[0].pageX;
        var beginY = event.changedTouches[0].pageY;
        Options_process.beginX = beginX;
        Options_process.beginY = beginY;
    }
    ProcessBar.prototype.resizeCutterByPercent = function() {
        //--根据百分比，设置裁剪框大小。
        var _o_cut_x = Options.cutLeft;
        var _o_cut_y = Options.cutTop;
        var _o_cut_width = Options.cutViewWidth;
        var _new_cut_width = parseInt(Options.cutMaxWidth * (Options_process.percent / 100));
        var _new_cut_height = parseInt(Options.cutMaxHeight * (Options_process.percent / 100));
        if (_new_cut_width > _o_cut_width) {
            //--扩大了。
            //--计算当前坐标
            var _d_x_2 = _new_cut_width - Options.cutViewWidth;
            var _d_y_2 = _new_cut_height - Options.cutViewHeight;

            Options.cutLeft = Options.cutLeft - parseInt(_d_x_2 / 2);
            Options.cutTop = Options.cutTop - parseInt(_d_y_2 / 2);
            //--这种情况下需要注意扩大的区域是不是超出裁剪框。
            //四象限判断。
            Options.cutViewWidth = _new_cut_width;
            Options.cutViewHeight = _new_cut_height;
            if (Options.cutLeft < Options.cutBoxLimitX1) {
                Options.cutLeft = Options.cutBoxLimitX1;
            } else if (Options.cutLeft + Options.cutViewWidth > Options.cutBoxLimitX2) {
                Options.cutLeft = Options.cutBoxLimitX2 - Options.cutViewWidth;
            }
            if (Options.cutTop < Options.cutBoxLimitY1) {
                Options.cutTop = Options.cutBoxLimitY1;
            } else if (Options.cutTop + Options.cutViewHeight > Options.cutBoxLimitY2) {
                Options.cutTop = Options.cutBoxLimitY2 - Options.cutViewHeight;
            }
            __that.resetCutter();
        } else if (_new_cut_width < _o_cut_width) {
            //--缩小了。
            var _d_x_2 = Options.cutViewWidth - _new_cut_width;
            var _d_y_2 = Options.cutViewHeight - _new_cut_height;
            Options.cutLeft = Options.cutLeft + parseInt(_d_x_2 / 2);
            Options.cutTop = Options.cutTop + parseInt(_d_y_2 / 2);
            Options.cutViewWidth = _new_cut_width;
            Options.cutViewHeight = _new_cut_height;
            __that.resetCutter();
        }
    }
    ProcessBar.prototype.touchmove = function(event) {
        event.preventDefault();
        event.stopPropagation();
        var beginX = event.changedTouches[0].pageX;
        var beginY = event.changedTouches[0].pageY;
        Options_process.endX = beginX;
        Options_process.endY = beginY;
        //--计算比分比。
        var _d_x = Options_process.endX - Options_process.beginX;
        Options_process.percent += parseInt(_d_x * 100 / Options_process.barWidth);
        if (Options_process.percent < Options_process.minPercent) {
            Options_process.percent = Options_process.minPercent;
        } else if (Options_process.percent > Options_process.maxPercent) {
            Options_process.percent = Options_process.maxPercent;
        }
        //--计算那个指示点位置。
        Options_process.pointX = parseInt(Options_process.barWidth * (Options_process.percent / 100));
        __thatBar.resetPercent();
        __thatBar.resizeCutterByPercent();
        //--后续处理。
        Options_process.beginX = Options_process.endX;
        Options_process.endY = Options_process.endY;
    }

    function drawToFinal(_sourceCanvas, _drawCanvas, _drawContext, _sw, _sh, _Orientation) {
        switch (_Orientation) {
            case 8:
                // 90 rotate left     --需要90度向左旋转。。那么，这个 PixelYDimension就是宽度了，PixelXDimension就是高度了。
                _drawCanvas.width = _sh;
                _drawCanvas.height = _sw;

                var tSetting = {
                    dx: 0,
                    dy: 0,
                    dw: 0,
                    dh: 0,
                    transX: 0,
                    transY: 0
                };
                tSetting.dw = _sh;
                var scale2 = _sw / _sh;
                tSetting.dh = parseFloat(tSetting.dw / scale2);
                tSetting.dy = (_sw - tSetting.dh) / 2;
                tSetting.transY = _sw / 2;
                tSetting.transX = _sh / 2;
                _drawContext.translate(tSetting.transX, tSetting.transY);
                _drawContext.rotate(-0.5 * Math.PI);
                _drawContext.scale(scale2, scale2);
                _drawContext.drawImage(_sourceCanvas, 0, 0, _sw, _sh, tSetting.dx - tSetting.transX, tSetting.dy - tSetting.transY, tSetting.dw, tSetting.dh);
                break;
            case 3:
                //180向左旋转 (右旋转也可以。)
                _drawCanvas.width = _sw;
                _drawCanvas.height = _sh;

                var tSetting = {
                    dx: 0,
                    dy: 0,
                    dw: 0,
                    dh: 0,
                    transX: 0,
                    transY: 0
                };
                tSetting.dw = _sw;
                tSetting.dh = _sh;
                tSetting.transY = _sh / 2;
                tSetting.transX = _sw / 2;
                _drawContext.translate(tSetting.transX, tSetting.transY);
                _drawContext.rotate(1 * Math.PI);
                //_drawContext.scale(scale2,scale2);
                _drawContext.drawImage(_sourceCanvas, 0, 0, _sw, _sh, tSetting.dx - tSetting.transX, tSetting.dy - tSetting.transY, tSetting.dw, tSetting.dh);
                break;
            case 6:
                //90 rotate right 需要向右旋转90度，PixelYDimension就是宽度了，PixelXDimension就是高度了。
                _drawCanvas.width = _sh;
                _drawCanvas.height = _sw;

                var tSetting = {
                    dx: 0,
                    dy: 0,
                    dw: 0,
                    dh: 0,
                    transX: 0,
                    transY: 0
                };
                tSetting.dw = _sh;
                var scale2 = _sw / _sh;
                tSetting.dh = parseFloat(tSetting.dw / scale2);
                tSetting.dy = (_sw - tSetting.dh) / 2;
                tSetting.transY = _sw / 2;
                tSetting.transX = _sh / 2;
                _drawContext.translate(tSetting.transX, tSetting.transY);
                _drawContext.rotate(0.5 * Math.PI);
                _drawContext.scale(scale2, scale2);
                _drawContext.drawImage(_sourceCanvas, 0, 0, _sw, _sh, tSetting.dx - tSetting.transX, tSetting.dy - tSetting.transY, tSetting.dw, tSetting.dh);
                break;
            case 1:
                //正常状态。
                _drawCanvas.width = _sw;
                _drawCanvas.height = _sh;

                var tSetting = {
                    dx: 0,
                    dy: 0,
                    dw: 0,
                    dh: 0,
                    transX: 0,
                    transY: 0
                };
                tSetting.dw = _sw;
                tSetting.dh = _sh;
                tSetting.transY = _sh / 2;
                tSetting.transX = _sw / 2;
                _drawContext.translate(tSetting.transX, tSetting.transY);
                //_drawContext.rotate(1*Math.PI);
                //_drawContext.scale(scale2,scale2);
                _drawContext.drawImage(_sourceCanvas, 0, 0, _sw, _sh, tSetting.dx - tSetting.transX, tSetting.dy - tSetting.transY, tSetting.dw, tSetting.dh);
                break;
        }
    }

    var message = resume == null ? "" : resume.message;
    var myCache = {};

    var Upload = {
        photo: function(p) {
            myCache.par = p;
            resume.selectLanguage(p.lang);
            //取数据
            var key = resume.getDataKey();

            p.dataKey = key;
            p.data = sessionStorage[key];
            if (!p.data) {
                alert("丢失缓存，请重新登录!");
                return;
            }
            p.data = util.toJSON(p.data);
            //初始化数据
            var jsonData = p.data.base;


            if (jsonData.photo) {
                //$("#img_preview")[0].src = "http://" + (jsonData.perPhotoPath || "") + jsonData.photo;
				$("#img_preview")[0].src = jsonData.photo;
            }
            myCache.photoFlag = $("#photoFlag");
            //初始化简历照片显示
            if (p.data.base.photoFlag == "1") {
                myCache.photoFlag.html("<label class='checked'>简历中显示</label>").attr("set", "0");
            } else {
                myCache.photoFlag.html("<label>简历中显示</label>").attr("set", "1");
            }
            myCache.photoFlag.click(function() {
                var flag = $(this).attr("set");
				var rid = $("#rid").val();
                $.ajax({
                    url: "/person/resume/resumeModule.html?act=photoFlag",
                    type: "POST",
					dataType: "json",
					data: {
						'act': 'photoFlag',
						//'rid': rid,
						'photoFlag': flag,
					},
                    beforeSend: function() {
                        ui.loading.show({id: 'update_loading',z: 9999});
                        ui.mask.show({id: 'update_mask',z: 9999 });
                    },
                    error: function() {
                        ui.loading.hide({ id: 'update_loading'});
                        alert("通讯失败!");
                        ui.mask.hide({id: 'update_mask'});
                    },
                    success: function(data) {
                        ui.loading.hide({id: 'update_loading'});
						ui.mask.hide({id: 'update_mask'});
                        if (data.code != 1) {
                            alert('设置失败!');
                            return;
                        }
                        p.data.base.photoFlag = flag;
                        sessionStorage[p.dataKey] = util.toString(p.data);
                        if (p.data.base.photoFlag == "1") {
                            myCache.photoFlag.html("<label class='checked'>简历中显示</label>").attr("set", "0");
                        } else {
                            myCache.photoFlag.html("<label>简历中显示</label>").attr("set", "1");
                        }
                        
                    }
                });
            });
        },
        avatar: function(p) {
            // 设置账号头像裁剪比例1:1
            Options.cutWidth = 150;
            Options.cutHeight = 150;
            Options.uploadType = 2;
            // 解决点击返回头像缓存的问题
            $('#goback_link').attr('href', '/person');
        }
    };

    var out = {
        /**
         * 总入口
         * @param  {object} args 配置参数
         * args = {
         *     // 上传类型
         *     // 'photo' - 简历相片
         *     // 'avatar' - 个人头像
         *     type: 'photo',
         *     lang: 0  // 简历语言
         * }
         */
        init: function(args) {
            if (window.FileReader == undefined) {
                alert("该手机不支持html5");
                return;
            }
            person.updateInfo();

            var type = args.type;
            Upload[type] && Upload[type]({lang: args.lang});
        }
    }

    module.exports = out;
});
