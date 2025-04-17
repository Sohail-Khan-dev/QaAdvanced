<?php

namespace App\Console\Commands;

use App\Models\BlogDetails;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class AddTagsToBlogs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blogs:add-tags {--force : Force update tags for all blogs, even those that already have tags}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Analyze blog content and add relevant tags to blogs without tags';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting to analyze blogs and add tags...');

        // Get blogs without tags or all blogs if --force option is used
        $query = $this->option('force') ? BlogDetails::query() : BlogDetails::whereNull('tags')->orWhere('tags', '');
        $blogs = $query->get();

        $totalBlogs = $blogs->count();
        $this->info("Found {$totalBlogs} blogs to process");

        if ($totalBlogs === 0) {
            $this->info('No blogs need tags. All blogs already have tags.');
            return 0;
        }

        $bar = $this->output->createProgressBar($totalBlogs);
        $bar->start();

        $tagsAdded = 0;

        foreach ($blogs as $blog) {
            // Extract plain text from content
            $plainText = strip_tags($blog->content);

            // Generate tags based on content
            $tags = $this->generateTags($plainText, $blog->title);

            // Update the blog with new tags
            $blog->tags = implode(',', $tags);
            $blog->save();

            $tagsAdded++;
            $bar->advance();
        }

        $bar->finish();
        $this->newLine(2);
        $this->info("Successfully added tags to {$tagsAdded} blogs.");

        return 0;
    }

    /**
     * Generate tags based on content analysis
     *
     * @param string $content The blog content
     * @param string $title The blog title
     * @return array Array of tags
     */
    private function generateTags(string $content, string $title): array
    {
        // Common QA/testing related keywords to look for
        $qaKeywords = [
            'testing' => 'testing',
            'test' => 'testing',
            'quality assurance' => 'qa',
            'qa' => 'qa',
            'automation' => 'automation',
            'manual testing' => 'manual testing',
            'selenium' => 'selenium',
            'cypress' => 'cypress',
            'playwright' => 'playwright',
            'unit test' => 'unit testing',
            'integration test' => 'integration testing',
            'e2e' => 'e2e testing',
            'end to end' => 'e2e testing',
            'performance' => 'performance testing',
            'load test' => 'load testing',
            'stress test' => 'stress testing',
            'api test' => 'api testing',
            'rest' => 'api',
            'soap' => 'api',
            'graphql' => 'graphql',
            'bug' => 'bugs',
            'defect' => 'defects',
            'issue' => 'issues',
            'agile' => 'agile',
            'scrum' => 'scrum',
            'kanban' => 'kanban',
            'jira' => 'jira',
            'ci' => 'ci/cd',
            'cd' => 'ci/cd',
            'continuous integration' => 'ci/cd',
            'continuous delivery' => 'ci/cd',
            'devops' => 'devops',
            'jenkins' => 'jenkins',
            'github' => 'github',
            'gitlab' => 'gitlab',
            'bitbucket' => 'bitbucket',
            'regression' => 'regression testing',
            'smoke test' => 'smoke testing',
            'sanity test' => 'sanity testing',
            'test case' => 'test cases',
            'test plan' => 'test planning',
            'test strategy' => 'test strategy',
            'test management' => 'test management',
            'testng' => 'testng',
            'junit' => 'junit',
            'pytest' => 'pytest',
            'jest' => 'jest',
            'mocha' => 'mocha',
            'chai' => 'chai',
            'cucumber' => 'cucumber',
            'bdd' => 'bdd',
            'behavior driven' => 'bdd',
            'tdd' => 'tdd',
            'test driven' => 'tdd',
            'mobile testing' => 'mobile testing',
            'appium' => 'appium',
            'accessibility' => 'accessibility testing',
            'security test' => 'security testing',
            'penetration test' => 'penetration testing',
            'pen test' => 'penetration testing',
            'istqb' => 'istqb',
            'certification' => 'certification',
            'test automation' => 'test automation',
            'framework' => 'frameworks',
            'database testing' => 'database testing',
            'sql' => 'database',
            'nosql' => 'database',
            'mongodb' => 'mongodb',
            'postman' => 'postman',
            'soapui' => 'soapui',
            'mock' => 'mocking',
            'stub' => 'stubbing',
            'code coverage' => 'code coverage',
            'test coverage' => 'test coverage',
            'white box' => 'white box testing',
            'black box' => 'black box testing',
            'gray box' => 'gray box testing',
            'grey box' => 'gray box testing',
            'test metrics' => 'test metrics',
            'test reporting' => 'test reporting',
            'test documentation' => 'test documentation',
            'test data' => 'test data',
            'data driven' => 'data driven testing',
            'keyword driven' => 'keyword driven testing',
            'hybrid' => 'hybrid testing',
            'exploratory' => 'exploratory testing',
            'adhoc' => 'adhoc testing',
            'usability' => 'usability testing',
            'ux' => 'ux testing',
            'user experience' => 'ux testing',
            'ui' => 'ui testing',
            'user interface' => 'ui testing',
            'visual' => 'visual testing',
            'cross browser' => 'cross browser testing',
            'cross platform' => 'cross platform testing',
            'compatibility' => 'compatibility testing',
            'localization' => 'localization testing',
            'l10n' => 'localization testing',
            'internationalization' => 'internationalization testing',
            'i18n' => 'internationalization testing',
            'globalization' => 'globalization testing',
            'g11n' => 'globalization testing',
            'web' => 'web testing',
            'mobile' => 'mobile testing',
            'desktop' => 'desktop testing',
            'cloud' => 'cloud testing',
            'saas' => 'saas testing',
            'microservices' => 'microservices testing',
            'api' => 'api testing',
            'rest api' => 'rest api',
            'soap api' => 'soap api',
            'web services' => 'web services',
            'test environment' => 'test environment',
            'test data management' => 'test data management',
            'test automation framework' => 'test automation framework',
            'page object model' => 'page object model',
            'pom' => 'page object model',
            'test design' => 'test design',
            'test execution' => 'test execution',
            'test closure' => 'test closure',
            'shift left' => 'shift left testing',
            'shift right' => 'shift right testing',
            'continuous testing' => 'continuous testing',
            'test orchestration' => 'test orchestration',
            'test analytics' => 'test analytics',
            'ai' => 'ai testing',
            'artificial intelligence' => 'ai testing',
            'machine learning' => 'ml testing',
            'ml' => 'ml testing',
            'blockchain' => 'blockchain testing',
            'iot' => 'iot testing',
            'internet of things' => 'iot testing',
            'big data' => 'big data testing',
            'data science' => 'data science',
            'test estimation' => 'test estimation',
            'test prioritization' => 'test prioritization',
            'risk based testing' => 'risk based testing',
            'value based testing' => 'value based testing',
            'test maturity' => 'test maturity',
            'tmm' => 'test maturity model',
            'test process improvement' => 'test process improvement',
            'test center of excellence' => 'test center of excellence',
            'tcoe' => 'test center of excellence',
            'test factory' => 'test factory',
            'test lab' => 'test lab',
            'test tools' => 'test tools',
            'test infrastructure' => 'test infrastructure',
            'test governance' => 'test governance',
            'test leadership' => 'test leadership',
            'test management tool' => 'test management tools',
            'testrail' => 'testrail',
            'qtest' => 'qtest',
            'zephyr' => 'zephyr',
            'xray' => 'xray',
            'testlink' => 'testlink',
            'quality center' => 'quality center',
            'alm' => 'alm',
            'application lifecycle management' => 'alm',
            'test lifecycle' => 'test lifecycle',
            'sdlc' => 'sdlc',
            'software development lifecycle' => 'sdlc',
            'stlc' => 'stlc',
            'software testing lifecycle' => 'stlc',
        ];

        // Combine title and content for analysis
        $textToAnalyze = strtolower($title . ' ' . $content);

        // Find matching keywords
        $matchedTags = [];
        foreach ($qaKeywords as $keyword => $tag) {
            if (strpos($textToAnalyze, strtolower($keyword)) !== false) {
                $matchedTags[$tag] = true; // Use as key to avoid duplicates
            }
        }

        // Get unique tags
        $tags = array_keys($matchedTags);

        // If no specific tags found, add some general ones based on title
        if (empty($tags)) {
            $tags = ['qa', 'software testing'];

            // Add some general tags based on title
            if (Str::contains(strtolower($title), ['automation', 'automated'])) {
                $tags[] = 'automation';
            }

            if (Str::contains(strtolower($title), ['manual'])) {
                $tags[] = 'manual testing';
            }

            if (Str::contains(strtolower($title), ['agile', 'scrum', 'kanban'])) {
                $tags[] = 'agile';
            }
        }

        // Limit to between 2 and 7 tags
        if (count($tags) < 2) {
            $tags = array_merge($tags, ['qa', 'software testing']);
        }

        // Shuffle and limit to 7 tags max
        shuffle($tags);
        $tags = array_slice($tags, 0, min(7, count($tags)));

        // Make sure we have at least 2 tags
        if (count($tags) < 2) {
            $tags = array_merge($tags, ['qa', 'software testing']);
            $tags = array_unique($tags);
        }

        return $tags;
    }
}
