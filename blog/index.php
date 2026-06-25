<?php
	include '../common/common.php';
	$pageHasCMSForm = 'false';
	$pageRelatedJsFiles = array(
		JS_PATH."functions.js",
	);
	$pageRelatedCssFiles = array();
	$pageHeading = "Blog";
	$metaInfo = $pageHeading." | ".$copyRightText;

	$perPage = 9;
	$page = isset($_GET['pg']) ? max(1, intval($_GET['pg'])) : 1;

	$allBlogs = array(
		array('slug'=>'plastic-surgery-vs-cosmetic-surgery','title'=>'Plastic Surgery vs Cosmetic Surgery: What\'s the Difference?','desc'=>'Understand the key differences between plastic and cosmetic surgery, their procedures, and which one is right for you.','date'=>'2026-06-15'),
		array('slug'=>'how-to-choose-best-plastic-surgeon-india','title'=>'How to Choose the Best Plastic Surgeon in India','desc'=>'A comprehensive guide to finding the right plastic surgeon with the right qualifications and experience.','date'=>'2026-06-13'),
		array('slug'=>'signs-you-are-good-candidate-plastic-surgery','title'=>'10 Signs You\'re a Good Candidate for Plastic Surgery','desc'=>'Discover whether plastic surgery is right for you with these 10 important signs and considerations.','date'=>'2026-06-10'),
		array('slug'=>'complete-guide-rhinoplasty-surgery','title'=>'Complete Guide to Rhinoplasty Surgery','desc'=>'Everything you need to know about nose reshaping surgery from consultation to recovery.','date'=>'2026-06-08'),
		array('slug'=>'recovery-timeline-after-nose-surgery','title'=>'Recovery Timeline After Nose Surgery','desc'=>'A detailed day-by-day and week-by-week recovery guide after rhinoplasty surgery.','date'=>'2026-06-05'),
		array('slug'=>'facelift-surgery-everything-you-need-to-know','title'=>'Facelift Surgery: Everything You Need to Know','desc'=>'Your complete resource on facelift surgery including types, benefits, risks, and expected results.','date'=>'2026-06-03'),
		array('slug'=>'liposuction-vs-tummy-tuck','title'=>'Liposuction vs Tummy Tuck: Which One is Better?','desc'=>'A detailed comparison of liposuction and tummy tuck to help you decide which procedure suits your needs.','date'=>'2026-06-01'),
		array('slug'=>'breast-augmentation-surgery','title'=>'Breast Augmentation Surgery: Benefits, Risks & Recovery','desc'=>'A complete guide to breast augmentation covering procedure details, implant options, and recovery timeline.','date'=>'2026-05-28'),
		array('slug'=>'breast-reduction-surgery','title'=>'Breast Reduction Surgery: Who Needs It?','desc'=>'Learn about breast reduction surgery, who qualifies, and how it can improve quality of life.','date'=>'2026-05-25'),
		array('slug'=>'gynecomastia-surgery','title'=>'Gynecomastia Surgery: Causes, Treatment & Recovery','desc'=>'Understand gynecomastia surgery, its causes, treatment options, and what recovery looks like.','date'=>'2026-05-22'),
		array('slug'=>'mommy-makeover-surgery','title'=>'Mommy Makeover Surgery Explained','desc'=>'Discover what a mommy makeover includes, benefits, recovery, and ideal candidates for the procedure.','date'=>'2026-05-19'),
		array('slug'=>'first-plastic-surgery-consultation','title'=>'What to Expect During Your First Plastic Surgery Consultation','desc'=>'Prepare for your first consultation with this guide on what questions to ask and what to expect.','date'=>'2026-05-16'),
		array('slug'=>'common-myths-about-plastic-surgery','title'=>'Common Myths About Plastic Surgery','desc'=>'Debunking the most common misconceptions people have about plastic and cosmetic surgery.','date'=>'2026-05-13'),
		array('slug'=>'plastic-surgery-recovery-tips','title'=>'Plastic Surgery Recovery Tips for Faster Healing','desc'=>'Expert-recommended tips to speed up recovery and get the best results after your procedure.','date'=>'2026-05-10'),
		array('slug'=>'plastic-surgery-cost-india','title'=>'How Much Does Plastic Surgery Cost in India?','desc'=>'A detailed breakdown of plastic surgery costs in India for various procedures.','date'=>'2026-05-07'),
		array('slug'=>'best-age-cosmetic-surgery','title'=>'Best Age for Cosmetic Surgery Procedures','desc'=>'Learn the ideal age for different cosmetic procedures and when to consider surgery.','date'=>'2026-05-04'),
		array('slug'=>'surgical-vs-non-surgical-facial-rejuvenation','title'=>'Non-Surgical vs Surgical Facial Rejuvenation','desc'=>'Compare surgical and non-surgical facial rejuvenation options to find what works best for you.','date'=>'2026-05-01'),
		array('slug'=>'blepharoplasty-eyelid-surgery','title'=>'Blepharoplasty (Eyelid Surgery): Benefits & Recovery','desc'=>'Everything about eyelid surgery including benefits, procedure details, and recovery timeline.','date'=>'2026-04-28'),
		array('slug'=>'chin-augmentation-surgery','title'=>'Chin Augmentation Surgery: Who Should Consider It?','desc'=>'Learn about chin augmentation surgery, ideal candidates, procedure details, and expected results.','date'=>'2026-04-25'),
		array('slug'=>'lip-lift-vs-lip-fillers','title'=>'Lip Lift Surgery vs Lip Fillers','desc'=>'Compare lip lift surgery and lip fillers to determine which option gives you the best results.','date'=>'2026-04-22'),
		array('slug'=>'scar-revision-surgery','title'=>'Scar Revision Surgery: Treatment Options','desc'=>'Explore scar revision surgery options, techniques, and recovery to improve your skin appearance.','date'=>'2026-04-19'),
		array('slug'=>'body-contouring-after-weight-loss','title'=>'Body Contouring After Weight Loss Surgery','desc'=>'Learn about body contouring procedures to remove excess skin after significant weight loss.','date'=>'2026-04-16'),
		array('slug'=>'plastic-surgery-safety','title'=>'Plastic Surgery Safety: How Safe Are Cosmetic Procedures?','desc'=>'Understanding the safety measures, risks, and precautions involved in cosmetic surgery procedures.','date'=>'2026-04-13'),
		array('slug'=>'preparing-for-plastic-surgery-checklist','title'=>'Preparing for Plastic Surgery: Complete Checklist','desc'=>'A step-by-step checklist to prepare yourself physically and mentally for your plastic surgery.','date'=>'2026-04-10'),
		array('slug'=>'how-long-do-plastic-surgery-results-last','title'=>'How Long Do Plastic Surgery Results Last?','desc'=>'Find out how long results from different plastic surgery procedures typically last.','date'=>'2026-04-07'),
		array('slug'=>'top-plastic-surgery-trends-2026','title'=>'Top Plastic Surgery Trends in 2026','desc'=>'Discover the most popular plastic surgery trends and procedures gaining traction in 2026.','date'=>'2026-04-04'),
		array('slug'=>'cosmetic-surgery-faq','title'=>'Common Questions Patients Ask Before Cosmetic Surgery','desc'=>'Answers to the most frequently asked questions about cosmetic surgery procedures.','date'=>'2026-04-01'),
		array('slug'=>'male-plastic-surgery','title'=>'Male Plastic Surgery: Most Popular Procedures for Men','desc'=>'Explore the top plastic surgery procedures that men are choosing to enhance their appearance.','date'=>'2026-03-28'),
		array('slug'=>'best-foods-after-plastic-surgery','title'=>'Best Foods to Eat After Plastic Surgery','desc'=>'Nutrition guide for post-surgery recovery including foods that promote faster healing.','date'=>'2026-03-25'),
		array('slug'=>'plastic-surgery-before-and-after','title'=>'Before & After Plastic Surgery: What Results Can You Expect?','desc'=>'Understand realistic expectations from plastic surgery results and factors that influence outcomes.','date'=>'2026-03-22'),
		array('slug'=>'questions-to-ask-plastic-surgeon','title'=>'15 Questions to Ask Before Choosing a Plastic Surgeon','desc'=>'Essential questions to ask during your consultation to make an informed decision.','date'=>'2026-03-19'),
		array('slug'=>'verify-plastic-surgeon-qualified','title'=>'How to Verify if Your Plastic Surgeon is Qualified','desc'=>'A step-by-step guide to verifying your surgeon credentials and qualifications.','date'=>'2026-03-16'),
		array('slug'=>'plastic-surgery-permanent-scars','title'=>'Does Plastic Surgery Leave Permanent Scars?','desc'=>'Learn about scarring after plastic surgery and how to minimize scar appearance.','date'=>'2026-03-13'),
		array('slug'=>'plastic-surgery-look-younger','title'=>'Can Plastic Surgery Make You Look Younger?','desc'=>'Discover how different plastic surgery procedures can help you achieve a youthful appearance.','date'=>'2026-03-10'),
		array('slug'=>'prepare-mentally-cosmetic-surgery','title'=>'How to Prepare Mentally for Cosmetic Surgery','desc'=>'Mental and emotional preparation tips before undergoing cosmetic surgery.','date'=>'2026-03-07'),
		array('slug'=>'male-plastic-surgery-everything','title'=>'Plastic Surgery for Men: Everything You Should Know','desc'=>'A complete guide to plastic surgery options available for men.','date'=>'2026-03-04'),
		array('slug'=>'is-plastic-surgery-painful','title'=>'Is Plastic Surgery Painful? What to Expect','desc'=>'What pain levels to expect during and after different plastic surgery procedures.','date'=>'2026-03-01'),
		array('slug'=>'plastic-surgery-recovery-time-work','title'=>'How Long Should You Take Off Work After Plastic Surgery?','desc'=>'Recovery timelines for popular procedures and when you can safely return to work.','date'=>'2026-02-26'),
		array('slug'=>'foods-help-heal-after-plastic-surgery','title'=>'What Foods Help Heal Faster After Plastic Surgery?','desc'=>'The best nutrition and foods to speed up healing after surgery.','date'=>'2026-02-23'),
		array('slug'=>'smoking-plastic-surgery','title'=>'Smoking and Plastic Surgery: Why You Must Quit Before Surgery','desc'=>'How smoking affects surgery outcomes and why quitting is essential.','date'=>'2026-02-20'),
		array('slug'=>'alcohol-after-plastic-surgery','title'=>'Alcohol After Plastic Surgery: When Is It Safe?','desc'=>'When and how to safely resume alcohol consumption after surgery.','date'=>'2026-02-17'),
		array('slug'=>'exercise-after-plastic-surgery','title'=>'Can You Exercise After Cosmetic Surgery?','desc'=>'When and how to safely return to exercise after cosmetic procedures.','date'=>'2026-02-14'),
		array('slug'=>'travel-after-plastic-surgery','title'=>'When Can You Travel After Plastic Surgery?','desc'=>'Travel guidelines and timing for different types of plastic surgery.','date'=>'2026-02-11'),
		array('slug'=>'best-season-plastic-surgery','title'=>'Plastic Surgery During Summer vs Winter: Which Is Better?','desc'=>'Pros and cons of scheduling plastic surgery in different seasons.','date'=>'2026-02-08'),
		array('slug'=>'permanent-plastic-surgery-results','title'=>'Are Plastic Surgery Results Permanent?','desc'=>'What to expect regarding the longevity of plastic surgery results.','date'=>'2026-02-05'),
		array('slug'=>'plastic-surgery-risks-complications','title'=>'Understanding Plastic Surgery Risks and Complications','desc'=>'Know the potential risks and how to minimize complications from plastic surgery.','date'=>'2026-02-02'),
		array('slug'=>'revision-plastic-surgery','title'=>'What Is Revision Plastic Surgery and When Is It Needed?','desc'=>'When and why patients may need a second surgical procedure.','date'=>'2026-01-30'),
		array('slug'=>'choose-right-facial-procedure','title'=>'How to Choose the Right Cosmetic Procedure for Your Face','desc'=>'A guide to selecting the best facial procedure for your specific concerns.','date'=>'2026-01-27'),
		array('slug'=>'facial-fat-grafting-vs-fillers','title'=>'Facial Fat Grafting vs Dermal Fillers','desc'=>'Comparing fat transfer and dermal fillers for facial volume restoration.','date'=>'2026-01-24'),
		array('slug'=>'lip-reduction-surgery','title'=>'Lip Reduction Surgery: Benefits, Procedure & Recovery','desc'=>'Everything about lip reduction surgery from consultation to results.','date'=>'2026-01-21'),
		array('slug'=>'otoplasty-ear-reshaping','title'=>'Ear Reshaping (Otoplasty): Complete Guide','desc'=>'A complete guide to otoplasty for ear reshaping and correction.','date'=>'2026-01-18'),
		array('slug'=>'dimple-creation-surgery','title'=>'Dimple Creation Surgery: Procedure & Recovery','desc'=>'Learn about dimple creation surgery and what to expect from the procedure.','date'=>'2026-01-15'),
		array('slug'=>'buccal-fat-removal','title'=>'Buccal Fat Removal: Is It Right for You?','desc'=>'Understanding buccal fat removal and whether it suits your facial structure.','date'=>'2026-01-12'),
		array('slug'=>'double-chin-removal','title'=>'Double Chin Removal Options: Surgical vs Non-Surgical','desc'=>'Compare surgical and non-surgical approaches to eliminating double chin.','date'=>'2026-01-09'),
		array('slug'=>'neck-lift-surgery','title'=>'Neck Lift Surgery: Everything You Need to Know','desc'=>'Complete guide to neck lift surgery including procedure, recovery, and results.','date'=>'2026-01-06'),
		array('slug'=>'facial-implants-balance','title'=>'How Facial Implants Improve Facial Balance','desc'=>'How chin, cheek, and jawline implants can enhance facial proportions.','date'=>'2026-01-03'),
		array('slug'=>'plastic-surgery-confidence','title'=>'Can Plastic Surgery Improve Confidence?','desc'=>'The psychological benefits of plastic surgery and managing expectations.','date'=>'2025-12-30'),
		array('slug'=>'popular-plastic-surgery-india','title'=>'Most Popular Plastic Surgery Procedures in India','desc'=>'Top plastic surgery procedures trending in India with cost insights.','date'=>'2025-12-27'),
		array('slug'=>'plastic-surgery-myths-facts','title'=>'Plastic Surgery Myths That Need to Be Debunked','desc'=>'Separating fact from fiction in the world of plastic surgery.','date'=>'2025-12-24'),
		array('slug'=>'plastic-surgery-glossary','title'=>'Complete Plastic Surgery Glossary: Terms Every Patient Should Know','desc'=>'A comprehensive glossary of plastic surgery terminology for patients.','date'=>'2025-12-21'),
		array('slug'=>'right-plastic-surgery-procedure','title'=>'How to Choose the Right Plastic Surgery Procedure for Your Goals','desc'=>'A guide to matching your aesthetic goals with the right procedure.','date'=>'2025-12-18'),
		array('slug'=>'first-time-plastic-surgery-guide','title'=>'First-Time Plastic Surgery: A Complete Beginner\'s Guide','desc'=>'Everything a first-time patient needs to know before surgery.','date'=>'2025-12-15'),
		array('slug'=>'what-happens-during-consultation','title'=>'What Happens During a Plastic Surgery Consultation?','desc'=>'Step-by-step guide to what to expect during your consultation.','date'=>'2025-12-12'),
		array('slug'=>'combined-plastic-surgery-procedures','title'=>'Can Plastic Surgery Be Combined with Other Procedures?','desc'=>'Learn about combining multiple procedures for comprehensive results.','date'=>'2025-12-09'),
		array('slug'=>'personalized-cosmetic-surgery-plan','title'=>'How to Create a Personalized Cosmetic Surgery Plan','desc'=>'Steps to develop a surgical plan tailored to your unique needs.','date'=>'2025-12-06'),
		array('slug'=>'plastic-surgery-pre-op-tests','title'=>'What Blood Tests Are Required Before Plastic Surgery?','desc'=>'Essential pre-operative tests and why they matter for your safety.','date'=>'2025-12-03'),
		array('slug'=>'medications-before-plastic-surgery','title'=>'Medications to Avoid Before Plastic Surgery','desc'=>'Important medications and supplements to stop before surgery.','date'=>'2025-11-30'),
		array('slug'=>'sleep-after-plastic-surgery','title'=>'How to Sleep Comfortably After Plastic Surgery','desc'=>'Best sleeping positions and tips for comfortable recovery.','date'=>'2025-11-27'),
		array('slug'=>'plastic-surgery-recovery-signs','title'=>'Signs Your Plastic Surgery Recovery Is Going Well','desc'=>'Normal recovery milestones and what to look for during healing.','date'=>'2025-11-24'),
		array('slug'=>'plastic-surgery-complications','title'=>'Warning Signs You Should Never Ignore After Cosmetic Surgery','desc'=>'Critical warning signs that require immediate medical attention.','date'=>'2025-11-21'),
		array('slug'=>'compression-garments-after-surgery','title'=>'Compression Garments: Why They Matter After Surgery','desc'=>'The importance of compression garments for optimal recovery.','date'=>'2025-11-18'),
		array('slug'=>'makeup-after-plastic-surgery','title'=>'Can You Wear Makeup After Facial Plastic Surgery?','desc'=>'When and how to safely use makeup during your recovery period.','date'=>'2025-11-15'),
		array('slug'=>'driving-after-plastic-surgery','title'=>'When Can You Drive Again After Plastic Surgery?','desc'=>'Safe driving timelines for different types of plastic surgery.','date'=>'2025-11-12'),
		array('slug'=>'gym-after-plastic-surgery','title'=>'How Soon Can You Return to the Gym After Surgery?','desc'=>'Exercise recovery guidelines for each type of plastic surgery.','date'=>'2025-11-09'),
		array('slug'=>'skin-care-after-plastic-surgery','title'=>'Summer Skin Care Tips After Cosmetic Surgery','desc'=>'Essential skincare tips for protecting your results in summer.','date'=>'2025-11-06'),
		array('slug'=>'winter-plastic-surgery-recovery','title'=>'Winter Recovery Tips for Plastic Surgery Patients','desc'=>'Benefits of winter surgery and cold-weather recovery tips.','date'=>'2025-11-03'),
		array('slug'=>'weight-gain-after-plastic-surgery','title'=>'How Weight Changes Affect Plastic Surgery Results','desc'=>'How weight fluctuations impact your surgical outcomes.','date'=>'2025-10-31'),
		array('slug'=>'pregnancy-after-tummy-tuck','title'=>'Pregnancy After Tummy Tuck: What You Should Know','desc'=>'Planning pregnancy after abdominoplasty for best results.','date'=>'2025-10-28'),
		array('slug'=>'facial-symmetry-surgery','title'=>'Can Plastic Surgery Improve Facial Symmetry?','desc'=>'How surgery can address facial asymmetry concerns.','date'=>'2025-10-25'),
		array('slug'=>'psychology-of-plastic-surgery','title'=>'Understanding the Psychology Behind Cosmetic Surgery','desc'=>'Psychological motivations and mental health considerations for surgery.','date'=>'2025-10-22'),
		array('slug'=>'natural-looking-plastic-surgery','title'=>'What Makes a Natural-Looking Plastic Surgery Result?','desc'=>'Keys to achieving natural, subtle results from cosmetic procedures.','date'=>'2025-10-19'),
		array('slug'=>'3d-imaging-plastic-surgery','title'=>'How Digital Imaging Helps Plan Cosmetic Surgery','desc'=>'Benefits of 3D imaging technology for surgical planning.','date'=>'2025-10-16'),
		array('slug'=>'body-contouring-options','title'=>'Surgical vs Non-Surgical Body Contouring','desc'=>'Comparing surgical and non-surgical body contouring options.','date'=>'2025-10-13'),
		array('slug'=>'board-certified-plastic-surgeon','title'=>'Why Board Certification Matters in Plastic Surgery','desc'=>'Why choosing a board-certified surgeon is essential for safety.','date'=>'2025-10-10'),
		array('slug'=>'choosing-cosmetic-clinic','title'=>'Red Flags to Watch for When Choosing a Cosmetic Clinic','desc'=>'Warning signs to avoid when selecting a cosmetic surgery clinic.','date'=>'2025-10-07'),
		array('slug'=>'when-to-get-plastic-surgery','title'=>'Common Reasons Patients Delay Plastic Surgery','desc'=>'Overcoming barriers to getting the procedure you want.','date'=>'2025-10-04'),
		array('slug'=>'plastic-surgery-results','title'=>'Plastic Surgery Success Stories: What Patients Can Expect','desc'=>'Realistic outcomes and what defines a successful result.','date'=>'2025-10-01'),
		array('slug'=>'maintain-plastic-surgery-results','title'=>'How to Maintain Your Cosmetic Surgery Results for Years','desc'=>'Tips for long-lasting results after your procedure.','date'=>'2025-09-28'),
		array('slug'=>'plastic-surgery-faqs','title'=>'Frequently Asked Questions About Plastic Surgery','desc'=>'Comprehensive answers to the most common plastic surgery questions.','date'=>'2025-09-25'),
		array('slug'=>'plastic-surgery-journey','title'=>'The Complete Plastic Surgery Journey: From Consultation to Recovery','desc'=>'A step-by-step guide through every stage of the plastic surgery process.','date'=>'2025-09-22'),
	);

	$totalBlogs = count($allBlogs);
	$totalPages = ceil($totalBlogs / $perPage);
	$page = min($page, $totalPages);
	$start = ($page - 1) * $perPage;
	$currentPageBlogs = array_slice($allBlogs, $start, $perPage);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include '../includes/head-tag-main.php';?>
<meta name="description" content="Read the latest articles on plastic surgery, cosmetic procedures, recovery tips, and patient guides from Dr. Manoj K Johar's Plastic Surgery Group in Noida.">
<meta name="robots" content="index, follow" />
<link rel="canonical" href="https://www.theaesthetic.in/blog/" />
<meta property="og:title" content="Blog | Dr. Johar's Plastic Surgery Group" />
<meta property="og:description" content="Read the latest articles on plastic surgery, cosmetic procedures, recovery tips, and patient guides." />
<meta property="og:url" content="https://www.theaesthetic.in/blog/" />
<meta property="og:type" content="website" />
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CollectionPage",
  "name": "Blog | Dr. Johar's Plastic Surgery Group",
  "description": "Read the latest articles on plastic surgery, cosmetic procedures, recovery tips, and patient guides.",
  "url": "https://www.theaesthetic.in/blog/"
}
</script>
<style>
	.blog-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:30px;padding:40px 0;}
	.blog-card{background:#fff;border:1px solid #e0e0e0;border-radius:8px;padding:30px 20px;text-align:center;transition:box-shadow .3s;}
	.blog-card:hover{box-shadow:0 4px 15px rgba(0,0,0,.1);}
	.blog-card .icon-wrap{display:flex;align-items:center;justify-content:center;width:80px;height:80px;margin:0 auto 20px;background:#f0f7ff;border-radius:50%;}
	.blog-card .icon-wrap svg{width:40px;height:40px;fill:#1a73e8;}
	.blog-card .blog-date{font-size:12px;color:#888;margin-bottom:10px;}
	.blog-card h2{font-size:18px;margin:0 0 10px;color:#333;}
	.blog-card h2 a{color:inherit;text-decoration:none;}
	.blog-card h2 a:hover{color:#1a73e8;}
	.blog-card p{font-size:14px;color:#666;line-height:1.6;margin:0 0 15px;}
	.blog-card .read-more{display:inline-block;padding:8px 20px;background:#1a73e8;color:#fff;text-decoration:none;border-radius:4px;font-size:13px;}
	.blog-card .read-more:hover{background:#1557b0;}
	.pagination{display:flex;justify-content:center;align-items:center;gap:8px;padding:30px 0 50px;}
	.pagination a,.pagination span{display:inline-block;padding:10px 16px;border:1px solid #ddd;border-radius:4px;text-decoration:none;font-size:14px;color:#333;}
	.pagination a:hover{background:#1a73e8;color:#fff;border-color:#1a73e8;}
	.pagination .active{background:#1a73e8;color:#fff;border-color:#1a73e8;}
	.pagination .disabled{color:#ccc;cursor:default;}
	@media(max-width:768px){.blog-grid{grid-template-columns:repeat(2,1fr);gap:20px;}}
	@media(max-width:480px){.blog-grid{grid-template-columns:1fr;}}
</style>
</head>
<body>
<div id="Container">
	<?php include '../includes/menu.php';?>
	<?php include '../includes/header.php';?>
	<div id="Banner-Container-S" role="presentation">
		<div id="Banner">
		<div class="navigation"><a href="/">Home</a> / Blog</div>
		<h1>Blog</h1>
		</div>
	</div>
	<div id="Content-Container" data-skip="Content">
		<div id="Content-Main">
			<div class="table-div">
				<div id="Content" class="table-cell">
					<section>
						<div class="blog-grid">
						<?php foreach($currentPageBlogs as $blog): ?>
							<div class="blog-card">
								<div class="icon-wrap"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zm0 16H5V5h14v14zM7 7h10v2H7zm0 4h10v2H7zm0 4h7v2H7z"/></svg></div>
								<div class="blog-date"><?php echo date('F j, Y', strtotime($blog['date'])); ?></div>
								<h2><a href="/blog/<?php echo $blog['slug']; ?>/"><?php echo $blog['title']; ?></a></h2>
								<p><?php echo $blog['desc']; ?></p>
								<a href="/blog/<?php echo $blog['slug']; ?>/" class="read-more">Read More</a>
							</div>
						<?php endforeach; ?>
						</div>
						<?php if($totalPages > 1): ?>
						<div class="pagination">
							<?php if($page > 1): ?>
								<a href="?pg=<?php echo $page-1; ?>">&laquo; Prev</a>
							<?php else: ?>
								<span class="disabled">&laquo; Prev</span>
							<?php endif; ?>
							<?php for($i = 1; $i <= $totalPages; $i++): ?>
								<?php if($i == $page): ?>
									<span class="active"><?php echo $i; ?></span>
								<?php else: ?>
									<a href="?pg=<?php echo $i; ?>"><?php echo $i; ?></a>
								<?php endif; ?>
							<?php endfor; ?>
							<?php if($page < $totalPages): ?>
								<a href="?pg=<?php echo $page+1; ?>">Next &raquo;</a>
							<?php else: ?>
								<span class="disabled">Next &raquo;</span>
							<?php endif; ?>
						</div>
						<?php endif; ?>
					</section>
				</div>
		>
		</div>
	</div>
	<?php include '../includes/footer.php';?>
</div>
<?php include '../common/scripts-compress.php'?>
</body>
</html>
