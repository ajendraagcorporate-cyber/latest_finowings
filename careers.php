<?php
/*
File: careers.php
Description: Ultra-Modern Careers Page for Finowings - 2026 Edition
Features: Advanced animations, glassmorphism, gradient effects, responsive design
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Careers at Finowings – Join Our Growing Team | 2026</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Finowings careers, join fintech team, content writer jobs, video editor jobs, php developer jobs Lucknow, stock market education jobs" name="keywords">
    <meta content="Explore careers at Finowings. Apply for content writer, video editor, and developer roles. Join our team and grow your career in finance." name="description">
    <link rel="canonical" href="https://www.finowings.com/careers.php" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Sora:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        :root {
            /* Scoped Careers Theme Colors */
            --fino-cr-primary-dark: #e9f9ff;
            --fino-cr-secondary-dark: #f0faff;
            --fino-cr-card-dark: #ffffff;
            
            /* Brand Colors */
            --fino-cr-primary-blue: #273158;
            --fino-cr-blue-light: #426ab3;
            --fino-cr-blue-dark: #1e2542;
            --fino-cr-gold: #cf9c0a;
            --fino-cr-gold-light: #e4ae11;
            --fino-cr-gold-dark: #b88a09;
            
            /* Accent Colors */
            --fino-cr-accent-purple: #4f46e5;
            --fino-cr-accent-pink: #db2777;
            --fino-cr-accent-cyan: #0891b2;
            
            /* Neutral Colors */
            --fino-cr-white: #ffffff;
            --fino-cr-gray-50: #f8fafc;
            --fino-cr-gray-100: #1e293b;
            --fino-cr-gray-200: #e2e8f0;
            --fino-cr-gray-300: #475569;
            --fino-cr-gray-400: #64748b;
            --fino-cr-gray-500: #94a3b8;
            --fino-cr-gray-600: #cbd5e1;
            --fino-cr-gray-700: #f1f5f9;
            --fino-cr-gray-800: #f8fafc;
            --fino-cr-gray-900: #ffffff;
            
            /* Typography */
            --fino-cr-font-primary: 'Inter', sans-serif;
            --fino-cr-font-display: 'Sora', sans-serif;
            
            /* Spacing */
            --fino-cr-section-padding: 120px;
            --fino-cr-section-padding-mobile: 60px;
            
            /* Border Radius */
            --fino-cr-radius-sm: 8px;
            --fino-cr-radius-md: 16px;
            --fino-cr-radius-lg: 24px;
            --fino-cr-radius-xl: 32px;
            
            /* Shadows */
            --fino-cr-shadow-sm: 0 2px 8px rgba(0, 0, 0, 0.1);
            --fino-cr-shadow-md: 0 4px 16px rgba(0, 0, 0, 0.15);
            --fino-cr-shadow-lg: 0 8px 32px rgba(0, 0, 0, 0.2);
            --fino-cr-shadow-xl: 0 16px 48px rgba(0, 0, 0, 0.3);
            
            /* Gradients */
            --fino-cr-gradient-primary: linear-gradient(135deg, #273158 0%, #426ab3 100%);
            --fino-cr-gradient-gold: linear-gradient(135deg, #cf9c0a 0%, #e4ae11 100%);
            --fino-cr-gradient-dark: linear-gradient(180deg, #273158 0%, #1e2542 100%);
            --fino-cr-gradient-glow: radial-gradient(circle at 50% 0%, rgba(39, 49, 88, 0.05) 0%, transparent 50%);
        }

        .fino-careers-page {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: var(--fino-cr-font-primary);
            background: var(--fino-cr-primary-dark);
            color: var(--fino-cr-gray-100);
            overflow-x: hidden;
            line-height: 1.6;
        }

        .fino-careers-page h1, 
        .fino-careers-page h2, 
        .fino-careers-page h3, 
        .fino-careers-page h4, 
        .fino-careers-page h5, 
        .fino-careers-page h6 {
            font-family: var(--fino-cr-font-display);
            font-weight: 700;
            color: var(--fino-cr-primary-blue);
            line-height: 1.2;
        }

        .fino-careers-page p {
            /*color: var(--fino-cr-gray-300);*/
            font-size: 1rem;
            line-height: 1.7;
        }

        .fino-careers-page a {
            text-decoration: none;
            transition: all 0.3s ease;
        }

        /* ========== SCROLL PROGRESS BAR ========== */
        .fino-cr-scroll-progress-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: rgba(255, 255, 255, 0.05);
            z-index: 9999;
        }

        .fino-cr-scroll-progress-bar {
            height: 100%;
            background: var(--fino-cr-gradient-gold);
            width: 0%;
            box-shadow: 0 0 10px rgba(245, 158, 11, 0.5);
            transition: width 0.1s ease-out;
        }

        /* ========== ENHANCED REVEAL ANIMATIONS ========== */
        .fino-cr-reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);
        }

        .fino-cr-reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        .fino-cr-reveal-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: all 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);
        }

        .fino-cr-reveal-left.active {
            opacity: 1;
            transform: translateX(0);
        }

        .fino-cr-reveal-right {
            opacity: 0;
            transform: translateX(50px);
            transition: all 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);
        }

        .fino-cr-reveal-right.active {
            opacity: 1;
            transform: translateX(0);
        }

        .fino-cr-reveal-scale {
            opacity: 0;
            transform: scale(0.9);
            transition: all 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);
        }

        .fino-cr-reveal-scale.active {
            opacity: 1;
            transform: scale(1);
        }

        /* ========== HERO SECTION ========== */
        .fino-cr-hero-section {
            position: relative;
            min-height: 70vh;
            display: flex;
            align-items: center;
            overflow: hidden;
            background: var(--fino-cr-gradient-dark);
            /*padding: 70px 0 50px;*/
        }

        .fino-cr-hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 20% 20%, rgba(59, 130, 246, 0.1) 0%, transparent 40%),
                radial-gradient(circle at 80% 80%, rgba(245, 158, 11, 0.08) 0%, transparent 40%),
                radial-gradient(circle at 50% 50%, rgba(139, 92, 246, 0.05) 0%, transparent 60%);
            pointer-events: none;
        }

        .fino-cr-hero-content {
            position: relative;
            z-index: 2;
        }

        .fino-cr-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: rgba(245, 158, 11, 0.1);
            border: 1px solid rgba(245, 158, 11, 0.3);
            color: var(--fino-cr-gold-light);
            padding: 12px 28px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.875rem;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            backdrop-filter: blur(10px);
            margin-bottom: 30px;
            animation: fino-cr-fadeInDown 1s ease;
        }

        .fino-cr-hero-badge i {
            font-size: 1rem;
            animation: fino-cr-pulse 2s infinite;
        }

        .fino-cr-hero-title {
            font-size: clamp(2.5rem, 6vw, 5rem);
            font-weight: 800;
            margin-bottom: 30px;
            background:#ffffff;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: fino-cr-fadeInUp 1s ease 0.2s both;
        }

        .fino-cr-hero-subtitle {
            font-size: clamp(1.1rem, 2vw, 1.3rem);
            color: rgba(255, 255, 255, 0.9);
            max-width: 750px;
            margin: 0 auto 50px;
            animation: fino-cr-fadeInUp 1s ease 0.4s both;
        }

        .fino-cr-hero-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
            animation: fino-cr-fadeInUp 1s ease 0.6s both;
        }

        /* Floating Elements */
        .fino-cr-floating-element {
            position: absolute;
            animation: fino-cr-float 6s ease-in-out infinite;
        }

        .fino-cr-floating-1 {
            top: 15%;
            left: 10%;
            width: 80px;
            height: 80px;
            background: var(--fino-cr-gradient-primary);
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            opacity: 0.1;
            animation-delay: 0s;
        }

        .fino-cr-floating-2 {
            top: 60%;
            right: 15%;
            width: 120px;
            height: 120px;
            background: var(--fino-cr-gradient-gold);
            border-radius: 63% 37% 54% 46% / 55% 48% 52% 45%;
            opacity: 0.08;
            animation-delay: 2s;
        }

        .fino-cr-floating-3 {
            bottom: 20%;
            left: 15%;
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #8b5cf6 0%, #ec4899 100%);
            border-radius: 50%;
            opacity: 0.1;
            animation-delay: 4s;
        }

        @keyframes fino-cr-float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-30px) rotate(180deg); }
        }

        /* ========== BUTTONS ========== */
        .fino-cr-btn-custom {
            padding: 16px 40px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1rem;
            border: none;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            display: inline-flex;
            align-items: center;
            gap: 10px;
            position: relative;
            overflow: hidden;
            text-decoration: none !important;
        }

        .fino-cr-btn-custom::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }

        .fino-cr-btn-custom:hover::before {
            left: 100%;
        }

        .fino-cr-btn-primary-custom {
            background: #ffffff;
            color: var(--fino-cr-primary-blue) !important;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .fino-cr-btn-primary-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            color: var(--fino-cr-gold) !important;
        }

        .fino-cr-btn-outline-custom {
            background: transparent;
            border: 2px solid var(--fino-cr-gold);
            color: var(--fino-cr-gold) !important;
            position: relative;
            z-index: 1;
        }

        .fino-cr-btn-outline-custom::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background: var(--fino-cr-gradient-gold);
            z-index: -1;
            transition: width 0.4s ease;
            border-radius: 50px;
        }

        .fino-cr-btn-outline-custom:hover::after {
            width: 100%;
        }

        .fino-cr-btn-outline-custom:hover {
            color: var(--fino-cr-primary-dark) !important;
            border-color: transparent;
            transform: translateY(-3px);
        }

        /* ========== SECTION STYLES ========== */
        .fino-cr-section {
            padding: var(--fino-cr-section-padding) 0;
            position: relative;
        }

        .fino-cr-section-header {
            text-align: center;
            margin-bottom: 70px;
        }

        .fino-cr-section-tag {
            display: inline-block;
            background: rgba(59, 130, 246, 0.1);
            border: 1px solid rgba(59, 130, 246, 0.3);
            color: var(--fino-cr-blue-light);
            padding: 8px 20px;
            border-radius: 50px;
            font-size: 0.875rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 20px;
        }

        .fino-cr-section-title {
            font-size: clamp(2rem, 4vw, 3.5rem);
            margin-bottom: 20px;
            color: var(--fino-cr-primary-blue);
        }

        .fino-cr-section-description {
            font-size: 1.1rem;
            color: var(--fino-cr-gray-400);
            max-width: 700px;
            margin: 0 auto;
        }

        /* ========== GLASS CARD ========== */
        .fino-cr-glass-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(39, 49, 88, 0.1);
            border-radius: var(--fino-cr-radius-lg);
            padding: 40px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            height: 100%;
        }

        .fino-cr-glass-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(59, 130, 246, 0.1), transparent);
            transition: left 0.6s;
        }

        .fino-cr-glass-card:hover::before {
            left: 100%;
        }

        .fino-cr-glass-card:hover {
            transform: translateY(-10px);
            border-color: rgba(59, 130, 246, 0.4);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4);
        }

        /* Icon Box */
        .fino-cr-icon-box {
            width: 80px;
            height: 80px;
            background: var(--fino-cr-gradient-primary);
            border-radius: var(--fino-cr-radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: var(--fino-cr-white);
            margin-bottom: 25px;
            position: relative;
            transition: all 0.4s ease;
        }

        .fino-cr-icon-box::before {
            content: '';
            position: absolute;
            inset: -4px;
            background: var(--fino-cr-gradient-primary);
            border-radius: var(--fino-cr-radius-md);
            opacity: 0;
            transition: opacity 0.4s ease;
            z-index: -1;
            filter: blur(20px);
        }

        .fino-cr-glass-card:hover .fino-cr-icon-box {
            transform: rotateY(360deg) scale(1.1);
        }

        .fino-cr-glass-card:hover .fino-cr-icon-box::before {
            opacity: 0.6;
        }

        /* ========== ABOUT SECTION ========== */
        .fino-cr-about-image-wrapper {
            position: relative;
            border-radius: var(--fino-cr-radius-xl);
            overflow: hidden;
        }

        .fino-cr-about-image-wrapper img {
            width: 100%;
            height: auto;
            border-radius: var(--fino-cr-radius-xl);
            transition: transform 0.6s ease;
        }

        .fino-cr-about-image-wrapper:hover img {
            transform: scale(1.05);
        }

        .fino-cr-about-badge {
            position: absolute;
            bottom: 30px;
            left: 30px;
            background: rgba(10, 14, 39, 0.9);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(59, 130, 246, 0.3);
            padding: 25px 30px;
            border-radius: var(--fino-cr-radius-lg);
            box-shadow: var(--fino-cr-shadow-xl);
        }

        .fino-cr-about-badge h4 {
            color: var(--fino-cr-gold);
            font-size: 1.3rem;
            margin-bottom: 5px;
        }

        .fino-cr-about-badge p {
            color: #fff;
            font-size: 0.875rem;
            margin: 0;
        }

        /* ========== STATS SECTION ========== */
        .fino-cr-stats-section {
            background: var(--fino-cr-secondary-dark);
            border-radius: var(--fino-cr-radius-xl);
            padding: 60px 40px;
            margin: 60px 0;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .fino-cr-stat-item {
            text-align: center;
        }

        .fino-cr-stat-number {
            font-size: 3rem;
            font-weight: 800;
            background: var(--fino-cr-gradient-gold);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 10px;
        }

        .fino-cr-stat-label {
            color: var(--fino-cr-gray-400);
            font-size: 1rem;
            font-weight: 500;
        }

        /* ========== CULTURE SECTION ========== */
        .fino-cr-quote-card {
            background: var(--fino-cr-gradient-primary);
            padding: 50px 40px;
            border-radius: var(--fino-cr-radius-xl);
            position: relative;
            overflow: hidden;
        }

        .fino-cr-quote-card::before {
            content: '"';
            position: absolute;
            top: -20px;
            left: 30px;
            font-size: 10rem;
            color: rgba(255, 255, 255, 0.1);
            font-family: Georgia, serif;
            line-height: 1;
        }

        .fino-cr-quote-card p {
            color: var(--fino-cr-white);
            font-size: 1.2rem;
            font-style: italic;
            margin: 0;
            position: relative;
            z-index: 1;
        }

        /* Gallery Grid */
        .fino-cr-gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-top: 50px;
        }

        .fino-cr-gallery-item {
            position: relative;
            border-radius: var(--fino-cr-radius-lg);
            overflow: hidden;
            height: 280px;
            border: 2px solid rgba(255, 255, 255, 0.05);
            transition: all 0.4s ease;
        }

        .fino-cr-gallery-item::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, transparent 0%, rgba(0, 0, 0, 0.7) 100%);
            opacity: 0;
            transition: opacity 0.4s ease;
            z-index: 1;
        }

        .fino-cr-gallery-item:hover::before {
            opacity: 1;
        }

        .fino-cr-gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .fino-cr-gallery-item:hover img {
            transform: scale(1.15) rotate(2deg);
        }

        .fino-cr-gallery-item:hover {
            border-color: var(--fino-cr-primary-blue);
            box-shadow: 0 15px 40px rgba(59, 130, 246, 0.3);
        }

        /* ========== JOB CARDS ========== */
        .fino-cr-job-card {
            background: var(--fino-cr-white);
            border: 1px solid rgba(39, 49, 88, 0.1);
            border-radius: var(--fino-cr-radius-lg);
            padding: 35px;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .fino-cr-job-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 0;
            background: var(--fino-cr-gradient-gold);
            transition: height 0.4s ease;
        }

        .fino-cr-job-card:hover::before {
            height: 100%;
        }

        .fino-cr-job-card:hover {
            border-color: rgba(245, 158, 11, 0.3);
            transform: translateY(-8px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
        }

        .fino-cr-job-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .fino-cr-job-badge {
            background: rgba(245, 158, 11, 0.15);
            border: 1px solid rgba(245, 158, 11, 0.3);
            color: var(--fino-cr-gold-light);
            padding: 8px 18px;
            border-radius: 50px;
            font-size: 0.875rem;
            font-weight: 600;
            white-space: nowrap;
        }

        .fino-cr-job-icon {
            width: 50px;
            height: 50px;
            background: rgba(59, 130, 246, 0.1);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: var(--fino-cr-blue-light);
            margin-bottom: 20px;
        }

        .fino-cr-job-title {
            font-size: 1.6rem;
            margin-bottom: 15px;
            color: var(--fino-cr-white);
        }

        .fino-cr-job-description {
            color: var(--fino-cr-gray-400);
            margin-bottom: 25px;
            flex-grow: 1;
        }

        .fino-cr-job-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 25px;
            padding-bottom: 25px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .fino-cr-job-meta-item {
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--fino-cr-gray-400);
            font-size: 0.9rem;
        }

        .fino-cr-job-meta-item i {
            color: var(--fino-cr-blue-light);
            font-size: 1rem;
        }

        .fino-cr-job-salary {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--fino-cr-gold);
            margin-bottom: 20px;
        }

        .fino-cr-btn-job-apply {
            width: 100%;
            padding: 14px;
            background: transparent;
            border: 2px solid var(--fino-cr-primary-blue);
            color: var(--fino-cr-primary-blue) !important;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            text-decoration: none !important;
        }

        .fino-cr-btn-job-apply:hover {
            background: var(--fino-cr-primary-blue);
            color: var(--fino-cr-white) !important;
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(59, 130, 246, 0.4);
        }

        /* ========== HIRING PROCESS ========== */
        .fino-cr-process-card {
            text-align: center;
            padding: 30px;
            position: relative;
        }

        .fino-cr-process-number {
            width: 80px;
            height: 80px;
            background: var(--fino-cr-gradient-gold);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 2rem;
            font-weight: 800;
            color: var(--fino-cr-primary-dark);
            box-shadow: 0 0 30px rgba(245, 158, 11, 0.5);
            position: relative;
        }

        .fino-cr-process-number::before {
            content: '';
            position: absolute;
            inset: -6px;
            background: var(--fino-cr-gradient-gold);
            border-radius: 50%;
            opacity: 0.3;
            filter: blur(15px);
            z-index: -1;
        }

        .fino-cr-process-card h4 {
            font-size: 1.4rem;
            margin-bottom: 15px;
        }

        .fino-cr-process-card p {
            color: var(--fino-cr-gray-400);
        }

        /* Process Connector Line */
        .fino-cr-process-connector {
            position: relative;
        }

        .fino-cr-process-connector::before {
            content: '';
            position: absolute;
            top: 40px;
            left: 50%;
            right: -50%;
            height: 2px;
            background: linear-gradient(90deg, var(--fino-cr-gold) 0%, transparent 100%);
            z-index: -1;
        }

        .fino-cr-process-connector:last-child::before {
            display: none;
        }

        /* ========== FAQ SECTION (MATCH IMAGE STYLE) ========== */
        .fino-cr-faq-wrapper {
            background: var(--fino-cr-primary-dark);
            padding: 60px 40px;
            border-radius: var(--fino-cr-radius-xl);
            margin-top: 40px;
            box-shadow: inset 0 0 20px rgba(39, 49, 88, 0.05);
        }

        .fino-cr-faq-title-centered {
            text-align: center;
            font-size: 2.8rem;
            color: var(--fino-cr-primary-blue) !important;
            font-weight: 700;
            margin-bottom: 50px;
            font-family: var(--fino-cr-font-display);
        }

        .fino-cr-faq-accordion {
            counter-reset: faq-counter;
        }

        .fino-cr-faq-accordion .accordion-item {
            background: #ffffff !important;
            border: none !important;
            border-left: 6px solid #f59e0b !important; /* Golden border from image */
            border-radius: 12px !important;
            margin-bottom: 20px !important;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06) !important;
            overflow: hidden;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .fino-cr-faq-accordion .accordion-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1) !important;
        }

        .fino-cr-faq-accordion .accordion-button {
            background: #ffffff !important;
            color: #334155 !important; /* Dark slate text */
            font-weight: 600;
            font-size: 1.15rem;
            padding: 24px 30px;
            border: none !important;
            box-shadow: none !important;
            display: flex;
            align-items: center;
            width: 100%;
            text-align: left;
        }

        .fino-cr-faq-accordion .accordion-button::before {
            counter-increment: faq-counter;
            content: counter(faq-counter) ". ";
            margin-right: 12px;
            color: #475569;
            font-weight: 700;
        }

        .fino-cr-faq-accordion .accordion-button:not(.collapsed) {
            color: var(--fino-cr-primary-blue) !important; /* Brand blue when active */
        }

        .fino-cr-faq-accordion .accordion-button::after {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3E%3Cpath fill='none' stroke='%23334155' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3E%3C/svg%3E") !important;
            background-size: 1.2rem;
            transition: transform 0.3s ease;
        }

        .fino-cr-faq-accordion .accordion-button:not(.collapsed)::after {
            transform: rotate(-180deg);
        }

        .fino-cr-faq-accordion .accordion-body {
            background: rgba(248, 250, 252, 0.8) !important;
            color: #475569 !important;
            padding: 25px 35px 35px 60px;
            font-size: 1.05rem;
            line-height: 1.8;
            border-top: 1px solid rgba(0, 0, 0, 0.03);
        }

        .fino-cr-cta-section {
            background: #1e2542;
            border-radius: 20px;
            padding: 80px 40px;
            text-align: center;
            margin: 80px 0;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .fino-cr-cta-content {
            position: relative;
            z-index: 2;
        }

        .fino-cr-cta-content {
            position: relative;
            z-index: 2;
        }

        .fino-cr-cta-rocket {
            font-size: 4.5rem;
            color: #ffc107;
            margin-bottom: 30px;
            display: inline-block;
            filter: drop-shadow(0 0 20px rgba(255, 193, 7, 0.5));
            animation: fino-cr-rocket-float 3s ease-in-out infinite;
        }

        @keyframes fino-cr-rocket-float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-15px) rotate(5deg); }
        }

        .fino-cr-cta-title-new {
            font-size: clamp(2.2rem, 5vw, 3.8rem);
            color: #ffffff !important;
            font-weight: 800;
            margin-bottom: 25px;
            font-family: var(--fino-cr-font-display);
            letter-spacing: -1px;
        }

        .fino-cr-cta-description-new {
            font-size: 1.3rem;
            color: rgba(255, 255, 255, 0.85);
            max-width: 850px;
            margin: 0 auto 60px;
            line-height: 1.6;
            font-weight: 400;
        }

        .fino-cr-cta-btns {
            display: flex;
            gap: 25px;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 60px;
        }

        .fino-cr-btn-yellow {
            background: #ffc107;
            color: #1e2542 !important;
            padding: 20px 50px;
            border-radius: 60px;
            font-weight: 800;
            font-size: 1.15rem;
            display: inline-flex;
            align-items: center;
            gap: 15px;
            box-shadow: 0 15px 35px rgba(255, 193, 7, 0.4);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            text-decoration: none !important;
        }

        .fino-cr-btn-yellow:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 20px 45px rgba(255, 193, 7, 0.5);
            background: #ffca2c;
            color: #1e2542 !important;
        }



        .fino-cr-cta-footer-text {
            color: rgba(255, 255, 255, 0.7);
            font-size: 1.1rem;
            max-width: 800px;
            margin: 40px auto 0;
            line-height: 1.6;
            font-style: italic;
        }

        .text-sm {
            font-size: 0.9rem;
        }

        .opacity-75 {
            opacity: 0.75;
        }

        .fino-cr-text-yellow {
            color: #ffc107;
            font-weight: 800;
        }

        /* ========== ANIMATIONS ========== */


        /* ========== RESPONSIVE DESIGN ========== */
        @media (max-width: 1200px) {
            :root {
                --fino-cr-section-padding: 100px;
            }
        }

        @media (max-width: 991px) {
            :root {
                --fino-cr-section-padding: 80px;
            }

            .fino-cr-hero-section {
                min-height: auto;
                padding: 120px 0 60px;
            }

            .fino-cr-hero-buttons {
                flex-direction: column;
                align-items: center;
            }

            .fino-cr-btn-custom {
                width: 100%;
                max-width: 300px;
                justify-content: center;
            }

            .fino-cr-about-badge {
                position: static;
                margin-top: 20px;
            }

            .fino-cr-gallery-grid {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 20px;
            }

            .fino-cr-process-connector::before {
                display: none;
            }
        }
        @media (max-width: 768px) {
            :root {
                --fino-cr-section-padding: var(--fino-cr-section-padding-mobile);
            }

            .fino-cr-section-header {
                margin-bottom: 50px;
            }

            .fino-cr-hero-title {
                font-size: 2.5rem;
            }

            .fino-cr-hero-subtitle {
                font-size: 1rem;
            }

            .fino-cr-glass-card {
                padding: 30px;
            }

            .fino-cr-stats-section {
                padding: 40px 30px;
            }

            .fino-cr-stat-number {
                font-size: 2.5rem;
            }

            .fino-cr-gallery-grid {
                grid-template-columns: 1fr;
            }

            .fino-cr-gallery-item {
                height: 250px;
            }

            .fino-cr-cta-section {
                padding: 50px 20px;
            }

            .fino-cr-cta-list {
                grid-template-columns: 1fr;
                gap: 15px;
            }

            .fino-cr-cta-list li {
                flex-direction: row;
                text-align: left;
                padding: 15px;
                gap: 20px;
            }

            .fino-cr-cta-list li i {
                width: 40px;
                height: 40px;
                font-size: 1.4rem;
                flex-shrink: 0;
            }
        }

        @media (max-width: 576px) {
            .fino-cr-btn-custom {
                padding: 14px 30px;
                font-size: 0.95rem;
            }

            .fino-cr-hero-badge {
                padding: 10px 20px;
                font-size: 0.75rem;
            }

            .fino-cr-section-tag {
                font-size: 0.75rem;
                padding: 6px 16px;
            }

            .fino-cr-icon-box {
                width: 70px;
                height: 70px;
                font-size: 1.6rem;
            }

            .fino-cr-job-card {
                padding: 25px;
            }

            .fino-cr-job-title {
                font-size: 1.4rem;
            }

            .fino-cr-process-number {
                width: 70px;
                height: 70px;
                font-size: 1.8rem;
            }
        }

        /* ========== SCROLL ANIMATIONS ========== */
        .fino-cr-scroll-animate {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }

        .fino-cr-scroll-animate.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* ========== UTILITIES ========== */
        .fino-cr-bg-dark-section {
            background: #ffffff; /* Use pure white for alternating sections */
        }

        .fino-cr-text-gradient-gold {
            background: var(--fino-cr-gradient-gold);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .fino-cr-text-gradient-blue {
            background: var(--fino-cr-gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>


<body class="fino-careers-page">


    <!-- Spinner Start -->
    <div id="spinner" class="fino-cr-spinner show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center" style="z-index: 9999;">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem; color: var(--fino-cr-primary-blue) !important;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <?php include("top-navigation.php"); ?>
    <!-- Navbar End -->

    <!-- ========== HERO SECTION ========== -->
    <section class="fino-cr-hero-section">
        <div class="container">
            <div class="fino-cr-hero-content text-center">
                <div class="fino-cr-hero-badge">
                    <i class="fas fa-star"></i>
                    <span>We're Hiring in 2026</span>
                </div>
                
                <h1 class="fino-cr-hero-title">
                    Shape the Future of<br>Financial Education
                </h1>
                
                <p class="fino-cr-hero-subtitle">
                    Join Finowings and be part of a passionate team transforming lives through innovative financial learning. Work on cutting-edge projects, collaborate with industry experts, and help thousands achieve financial freedom.
                </p>
                
                <div class="fino-cr-hero-buttons">
                    <a href="#openings" class="fino-cr-btn-custom fino-cr-btn-primary-custom">
                        <span>View Open Positions</span>
                        <i class="fas fa-arrow-down"></i>
                    </a>
                    <a href="mailto:info@finowings.com" class="fino-cr-btn-custom fino-cr-btn-outline-custom">
                        <i class="fas fa-paper-plane"></i>
                        <span>Send Your Resume</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== ABOUT SECTION ========== -->
    <section class="fino-cr-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="fino-cr-about-image-wrapper">
                        <img src="img/hiring.jpg" class="img-fluid" alt="Finowings Team" onerror="this.src='admin/media/team/office.jpg'">
                        <div class="fino-cr-about-badge d-none d-md-block">
                            <h4><i class="fas fa-users me-2"></i>Join Our Team</h4>
                            <p>Building Tomorrow's Leaders</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="fino-cr-section-tag">
                        <i class="fas fa-building me-2"></i>About Finowings
                    </div>
                    <h2 class="fino-cr-section-title mb-4">Empowering Financial Futures</h2>
                    
                    <p class="mb-4">
                        <strong>Finowings Training Academy Private Limited</strong> is on a mission to revolutionize financial education. We're building a platform that enhances financial capability and stability for youth and communities across India.
                    </p>
                    
                    <p class="mb-4">
                        As a leading financial education platform, we help people understand complex financial concepts and manage their money better. Our courses combine cutting-edge managerial skills with the latest industry tactics, opening new opportunities for learners.
                    </p>
                    
                    <p>
                        We provide comprehensive financial education with diverse investment strategies, enabling learners to capitalize on opportunities and navigate ever-changing markets with confidence.
                    </p>
                    
                    <div class="fino-cr-stats-section mt-5">
                        <div class="row text-center">
                            <div class="col-4">
                                <div class="fino-cr-stat-item">
                                    <div class="fino-cr-stat-number">5000+</div>
                                    <div class="fino-cr-stat-label">Students</div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="fino-cr-stat-item">
                                    <div class="fino-cr-stat-number">50+</div>
                                    <div class="fino-cr-stat-label">Courses</div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="fino-cr-stat-item">
                                    <div class="fino-cr-stat-number">98%</div>
                                    <div class="fino-cr-stat-label">Success Rate</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== CULTURE SECTION ========== -->
    <section class="fino-cr-section fino-cr-bg-dark-section">
        <div class="container">
            <div class="fino-cr-section-header">
                <span class="fino-cr-section-tag">
                    <i class="fas fa-heart me-2"></i>Our Culture
                </span>
                <h2 class="fino-cr-section-title">Life at Finowings</h2>
                <p class="fino-cr-section-description">
                    We believe great company culture comes from treating employees with respect and empathy. Join a team that develops solutions improving millions of lives.
                </p>
            </div>
            
            <div class="row mb-5">
                <div class="col-12">
                    <div class="fino-cr-quote-card">
                        <p>
                            "We create spaces that are inviting, familiar, environmentally sustainable, and physically accessible for all. Every employee is a valued contributor who helps us achieve our mission of financial empowerment for everyone."
                        </p>
                    </div>
                </div>
            </div>

            <div class="fino-cr-gallery-grid">
                <div class="fino-cr-gallery-item">
                    <img src="admin/media/team/Mentors.jpg" alt="Expert Mentors" loading="lazy">
                </div>
                <div class="fino-cr-gallery-item">
                    <img src="admin/media/team/Manager.jpg" alt="Leadership Team" loading="lazy">
                </div>
                <div class="fino-cr-gallery-item">
                    <img src="admin/media/team/office.jpg" alt="Modern Office" loading="lazy">
                </div>
                <div class="fino-cr-gallery-item">
                    <img src="admin/media/team/Digital.jpg" alt="Digital Innovation" loading="lazy">
                </div>
                <div class="fino-cr-gallery-item">
                    <img src="admin/media/team/Meeting.jpg" alt="Team Collaboration" loading="lazy">
                </div>
                <div class="fino-cr-gallery-item">
                    <img src="admin/media/team/office1.jpg" alt="Work Environment" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- ========== BENEFITS SECTION ========== -->
    <section class="fino-cr-section">
        <div class="container">
            <div class="fino-cr-section-header">
                <span class="fino-cr-section-tag">
                    <i class="fas fa-gift me-2"></i>Employee Benefits
                </span>
                <h2 class="fino-cr-section-title">Why Join Finowings?</h2>
                <p class="fino-cr-section-description">
                    We invest in our team with competitive compensation and a supportive work environment
                </p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="fino-cr-glass-card">
                        <div class="fino-cr-icon-box">
                            <i class="fas fa-hand-holding-dollar"></i>
                        </div>
                        <h4 class="mb-3">Competitive Salary</h4>
                        <p>Enjoy competitive base pay with performance-based bonuses that reward your achievements and contributions to company growth.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="fino-cr-glass-card">
                        <div class="fino-cr-icon-box">
                            <i class="fas fa-heart-pulse"></i>
                        </div>
                        <h4 class="mb-3">Health & Wellness</h4>
                        <p>We value your well-being with paid sick leaves and health benefits, ensuring you can maintain productivity while staying healthy.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="fino-cr-glass-card">
                        <div class="fino-cr-icon-box">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h4 class="mb-3">Flexible Hours</h4>
                        <p>Achieve work-life balance with flexible work arrangements that meet both your personal needs and our business goals.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="fino-cr-glass-card">
                        <div class="fino-cr-icon-box">
                            <i class="fas fa-shield-halved"></i>
                        </div>
                        <h4 class="mb-3">Safe Workplace</h4>
                        <p>Work in a secure environment where all employees are protected from risks, ensuring peace of mind every day.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="fino-cr-glass-card">
                        <div class="fino-cr-icon-box">
                            <i class="fas fa-champagne-glasses"></i>
                        </div>
                        <h4 class="mb-3">Fun Office Perks</h4>
                        <p>Enjoy board games, regular office parties, and team trips that make work enjoyable and build lasting friendships.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="fino-cr-glass-card">
                        <div class="fino-cr-icon-box">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h4 class="mb-3">Learning & Growth</h4>
                        <p>Access resources to enhance your skills plus free access to our premium courses. Grow professionally with us!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== OPEN POSITIONS SECTION ========== -->
    <section id="openings" class="fino-cr-section fino-cr-bg-dark-section">
        <div class="container">
            <div class="fino-cr-section-header">
                <span class="fino-cr-section-tag">
                    <i class="fas fa-briefcase me-2"></i>Join Our Team
                </span>
                <h2 class="fino-cr-section-title">Current Openings</h2>
                <p class="fino-cr-section-description">
                    Explore exciting opportunities to grow your career in fintech
                </p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="fino-cr-job-card">
                        <div class="fino-cr-job-header">
                            <div class="fino-cr-job-badge">
                                <i class="fas fa-users me-1"></i>
                                3 Positions
                            </div>
                        </div>
                        
                        <div class="fino-cr-job-icon">
                            <i class="fas fa-pen-fancy"></i>
                        </div>
                        
                        <h3 class="fino-cr-job-title">Content Writer</h3>
                        <p class="fino-cr-job-description">
                            Join our creative team as a content writer. Craft compelling stories about finance, trading, and investment strategies for diverse audiences.
                        </p>
                        
                        <div class="fino-cr-job-meta">
                            <div class="fino-cr-job-meta-item">
                                <i class="fas fa-briefcase"></i>
                                <span>Full Time / Part Time / Freelance</span>
                            </div>
                            <div class="fino-cr-job-meta-item">
                                <i class="fas fa-location-dot"></i>
                                <span>Lucknow / Remote</span>
                            </div>
                        </div>
                        
                        <div class="fino-cr-job-salary">
                            <i class="fas fa-indian-rupee-sign me-2"></i>18,000 - 35,000 / month
                        </div>
                        
                        <a href="content-writer.php" class="fino-cr-btn-job-apply">
                            <span>View Details</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="fino-cr-job-card">
                        <div class="fino-cr-job-header">
                            <div class="fino-cr-job-badge">
                                <i class="fas fa-user me-1"></i>
                                1 Position
                            </div>
                        </div>
                        
                        <div class="fino-cr-job-icon">
                            <i class="fas fa-film"></i>
                        </div>
                        
                        <h3 class="fino-cr-job-title">Video Editor</h3>
                        <p class="fino-cr-job-description">
                            Bring stories to life through video. Edit educational content, promotional videos, and engaging social media content for our growing audience.
                        </p>
                        
                        <div class="fino-cr-job-meta">
                            <div class="fino-cr-job-meta-item">
                                <i class="fas fa-briefcase"></i>
                                <span>Full Time</span>
                            </div>
                            <div class="fino-cr-job-meta-item">
                                <i class="fas fa-location-dot"></i>
                                <span>Lucknow (On-site)</span>
                            </div>
                        </div>
                        
                        <div class="fino-cr-job-salary">
                            <i class="fas fa-indian-rupee-sign me-2"></i>18,000 - 25,000+ / month
                        </div>
                        
                        <a href="video-editor.php" class="fino-cr-btn-job-apply">
                            <span>View Details</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="fino-cr-job-card">
                        <div class="fino-cr-job-header">
                            <div class="fino-cr-job-badge">
                                <i class="fas fa-user me-1"></i>
                                1 Position
                            </div>
                        </div>
                        
                        <div class="fino-cr-job-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        
                        <h3 class="fino-cr-job-title">PHP Developer</h3>
                        <p class="fino-cr-job-description">
                            Build scalable backend systems for our learning platform. Work with modern frameworks and contribute to innovative fintech solutions.
                        </p>
                        
                        <div class="fino-cr-job-meta">
                            <div class="fino-cr-job-meta-item">
                                <i class="fas fa-briefcase"></i>
                                <span>Full Time</span>
                            </div>
                            <div class="fino-cr-job-meta-item">
                                <i class="fas fa-location-dot"></i>
                                <span>Lucknow (On-site)</span>
                            </div>
                        </div>
                        
                        <div class="fino-cr-job-salary">
                            <i class="fas fa-indian-rupee-sign me-2"></i>25,000 - 45,000 / month
                        </div>
                        
                        <a href="php-developer.php" class="fino-cr-btn-job-apply">
                            <span>View Details</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== HIRING PROCESS SECTION ========== -->
    <section class="fino-cr-section">
        <div class="container">
            <div class="fino-cr-section-header">
                <span class="fino-cr-section-tag">
                    <i class="fas fa-route me-2"></i>How It Works
                </span>
                <h2 class="fino-cr-section-title">Our Hiring Process</h2>
                <p class="fino-cr-section-description">
                    A simple 4-step journey from application to onboarding
                </p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 fino-cr-process-connector">
                    <div class="fino-cr-process-card">
                        <div class="fino-cr-process-number">1</div>
                        <h4>Application</h4>
                        <p>Submit your resume and portfolio showcasing your best work.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 fino-cr-process-connector">
                    <div class="fino-cr-process-card">
                        <div class="fino-cr-process-number">2</div>
                        <h4>Screening</h4>
                        <p>Initial review of your skills, experience, and cultural fit.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 fino-cr-process-connector">
                    <div class="fino-cr-process-card">
                        <div class="fino-cr-process-number">3</div>
                        <h4>Interview</h4>
                        <p>Technical assessment and discussion about role expectations.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 fino-cr-process-connector">
                    <div class="fino-cr-process-card">
                        <div class="fino-cr-process-number">4</div>
                        <h4>Onboarding</h4>
                        <p>Welcome to the family! Get ready to make an impact.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== FAQ SECTION ========== -->
    <section class="fino-cr-section fino-cr-bg-dark-section">
        <div class="container">
            <div class="fino-cr-faq-wrapper">
                <h2 class="fino-cr-faq-title-centered">FAQs</h2>
                
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class="accordion fino-cr-faq-accordion" id="faqAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                        What are the current job openings at Finowings?
                                    </button>
                                </h2>
                                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        We're currently hiring for <strong>Content Writer</strong> (3 positions – Full-time/Part-time/Freelance), <strong>Video Editor</strong> (1 position – Full-time), and <strong>PHP Developer</strong> (1 position – Full-time, On-site in Lucknow). New roles are added regularly, so check back often!
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                        Where is Finowings located and is remote work available?
                                    </button>
                                </h2>
                                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Our headquarters is in <strong>Lucknow, Uttar Pradesh</strong> (C-1, Bank of Baroda Building, Sector-M, Mama Chauraha, Kursi Road). Most positions are on-site, but we offer remote and freelance options for Content Writer roles based on experience and performance.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                        What is the salary range for these positions?
                                    </button>
                                </h2>
                                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <strong>Content Writer:</strong> ₹18,000 – ₹35,000 per month<br>
                                        <strong>Video Editor:</strong> ₹18,000 – ₹25,000 per month + performance incentives<br>
                                        <strong>PHP Developer:</strong> ₹25,000 – ₹45,000 per month<br><br>
                                        Final compensation is negotiable based on your skills, portfolio quality, and interview performance.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                        Do you hire freshers for these roles?
                                    </button>
                                </h2>
                                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Absolutely! Freshers with strong writing skills, a compelling portfolio, or basic video editing knowledge are encouraged to apply for Content Writer and Video Editor positions. Knowledge of finance or stock markets is a valuable plus.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                        How can I apply for a job at Finowings?
                                    </button>
                                </h2>
                                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        You can apply by clicking the <strong>"View Details"</strong> button on any job opening, or send your resume and portfolio directly to <strong>info@finowings.com</strong>. Please mention the position name and "Lucknow" in your email subject line.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== APPLICATION CTA SECTION (7) ========== -->
    <section class="fino-cr-section">
        <div class="container">
            <div class="fino-cr-cta-section">
                <div class="fino-cr-cta-content">
                    <div class="fino-cr-cta-rocket">
                        <i class="fas fa-paper-plane"></i>
                    </div>
                    
                    <h2 class="fino-cr-cta-title-new">Ready to Join Finowings?</h2>
                    
                    <p class="fino-cr-cta-description-new">
                        Take the next step in your career. Whether you're a creative writer, video expert, or skilled developer — we’d love to hear from you.
                    </p>
                    
                    <div class="fino-cr-cta-btns">
                        <a href="#openings" class="fino-cr-btn-yellow">
                            <i class="fas fa-check-circle"></i>
                            Apply Now
                        </a>
                    </div>
                    
                    <p class="fino-cr-cta-footer-text">
                        <i class="fas fa-clock me-2"></i>
                        We review applications on a rolling basis and reply within 3–5 working days.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Start -->
    <?php include("footer.php"); ?>
    <!-- Footer End -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    
    <script>
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Stats Counter Animation (Simplified)
        const statsNumbers = document.querySelectorAll('.fino-cr-stat-number');
        const animateCounter = (el) => {
            const target = parseInt(el.innerText);
            let count = 0;
            const updateCount = () => {
                const increment = target / 50;
                if (count < target) {
                    count += increment;
                    el.innerText = Math.ceil(count) + (el.innerText.includes('%') ? '%' : (el.innerText.includes('+') ? '+' : ''));
                    setTimeout(updateCount, 40);
                } else {
                    el.innerText = target + (el.innerText.includes('%') ? '%' : (el.innerText.includes('+') ? '+' : ''));
                }
            };
            updateCount();
        };

        // Static Trigger for counters
        window.addEventListener('load', () => {
            const spinner = document.getElementById('spinner');
            if (spinner) spinner.classList.remove('show');
            statsNumbers.forEach(num => animateCounter(num));
        });
    </script>
</body>

</html>